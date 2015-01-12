<?php 

 class ApiController extends AppController{

 	public $uses = array('Establishment','User','Coordinate','Comment','AddressEstablishment',
 						 'Rate','EstablishmentRate','EstablishmentFile','Address','Category','Bookmark','File','FileUser','Deal');

 	public function beforeFilter(){
	 	parent::beforeFilter(); 
		$this->Auth->allow('listEstablishment','rateEstablishment','saveCommentAndRate',
			'testUser','uploadUserFilesToEstablishment','saveBookmark','findBookmarkUser', 'removeBookmark','listDeal'); 
//		var_dump($this->Auth->user());
	}

 	public function listEstablishment($cod = 'locale',$param1 = null,$param2 = null,$param3=null){
 		
 		$this->autoRender = false;
 		
 		header('Access-Control-Allow-Origin: *');  
 		
 		$cod = strtolower($cod);
 	
 		if($cod == 'locale'){

 		$state = $param1;
 		$city = $param2;
 		$neighborhood = $param3;
 		
 		$options = array('conditions'=> array());
 	
			if($state) $options['conditions'][] = array('lower(Address.state) like \'%'.strtolower($state).'%\'');
 			if($city) $options['conditions'][] = array('lower(Address.city) like \'%'.strtolower($city).'%\'');
 			if($neighborhood) $options['conditions'][] = array('lower(Address.neighborhood) like \'%'.strtolower($neighborhood).'%\'');
 			
 		$options += array('fields'=>'AddressEstablishment.establishment_id');
 		
 		$est_id = $this->AddressEstablishment->find('all',$options);

		$est_id = Set::extract($est_id,'{n}.AddressEstablishment.establishment_id');
		
		}else if(is_numeric($cod)){
		
		$est_id = $cod;
	
		}else if($cod == 'name'){

			$name = $param1;
			$est = array('lower(Establishment.name) like'=>"%$name%");

		}else if($cod =='geolocation'){

			if($param3) $est_id = $this->getEstablishmentByGeo($param1,$param2,$param3);
			else if($param1 && $param2 != null) $est_id = $this->getEstablishmentByGeo($param1,$param2);
			


		}else if($cod == 'fulltext'){

			$fulltext = $param1." ".$param2." ".$param3;
			$est_id = $this->getAddressByFullText($fulltext);
		
		}else if($cod == 'id'){
			$est_id = array($param1);
		}
		$limit = 5;
		
		if(!isset($est)) $est = array( "Establishment.id in(".implode(',',$est_id).") order by Field(id,".implode(',',$est_id).")" );
 		
 		$this->paginate = array('recursive' => 2 ,'limit'=> $limit);

 		$est = $this->paginate($est);
 		

 		foreach ($est as $key => $rate) {
 			
 			if ($cod == 'id') {
 	
	 			foreach($rate['Rate'] as $k => $rt){

	 				if (!empty($rt['modified']) && $rt['modified'] != '0000-00-00 00:00:00') {
	 					$est[$key]['Rate'][$k]['modified'] = $this->get_time_difference_php($rt['modified']);
	 				
	 				} else {
	 					unset($est[$key]['Rate'][$k]);
	 				}
	 			}
 			}
 	
 			/* media rating establishment */
 			$rate = Set::extract('{n}.grade',$rate['Rate']);
 			if (is_array($rate) && count($rate) != 0) {
 				$est[$key]['RateAverage'] = round( array_sum($rate) / count($rate) );
 			}
 		}

 		$res['results'] = $est;
 		$res['paginate'] = $this->params['paging']['Establishment'];
 		
 		echo json_encode($res);

 	
 	}

 	function get_time_difference_php ($created_time) {
        date_default_timezone_set('Brazil/East'); //Change as per your default time
        $str = strtotime($created_time);
        $today = strtotime(date('Y-m-d H:i:s'));

        // It returns the time difference in Seconds...
        $time_differnce = $today-$str;

        // To Calculate the time difference in Years...
        $years = 60*60*24*365;

        // To Calculate the time difference in Months...
        $months = 60*60*24*30;

        // To Calculate the time difference in Days...
        $days = 60*60*24;

        // To Calculate the time difference in Hours...
        $hours = 60*60;

        // To Calculate the time difference in Minutes...
        $minutes = 60;

        if(intval($time_differnce/$years) > 1)
        {
            return intval($time_differnce/$years)." Anos atrás";
        }else if(intval($time_differnce/$years) > 0)
        {
            return intval($time_differnce/$years)." Ano atrás";
        }else if(intval($time_differnce/$months) > 1)
        {
            return intval($time_differnce/$months)." meses atrás";
        }else if(intval(($time_differnce/$months)) > 0)
        {
            return intval(($time_differnce/$months))." mes atrás";
        }else if(intval(($time_differnce/$days)) > 1)
        {
            return intval(($time_differnce/$days))." dias atrás";
        }else if (intval(($time_differnce/$days)) > 0) 
        {
            return intval(($time_differnce/$days))." dia atrás";
        }else if (intval(($time_differnce/$hours)) > 1) 
        {
            return intval(($time_differnce/$hours))." horas atrás";
        }else if (intval(($time_differnce/$hours)) > 0) 
        {
            return intval(($time_differnce/$hours))." hora atrás";
        }else if (intval(($time_differnce/$minutes)) > 1) 
        {
            return intval(($time_differnce/$minutes))." minutos atrás";
        }else if (intval(($time_differnce/$minutes)) > 0) 
        {
            return intval(($time_differnce/$minutes))." minuto atrás";
        }else if (intval(($time_differnce)) > 1) 
        {
            return intval(($time_differnce))." segundos atrás";
        }else
        {
            return "poucos segundos atrás";
        }
  }

 	private function getEstablishmentByGeo($lat,$lng,$distance = 10){
 		
 		/*$query = "SELECT address_id
				  FROM coordinates 
				  INNER JOIN address_coordinates  
				  ON (coordinate_id = coordinates.id)
				  WHERE sqrt(POW(69.1*(lat-($lat)),2)+POW(69.1*(($lng)-lng)*COS(lat/57.3),2)) < $distance desc";


		$query = "SELECT address_id,
				  POW(69.1 * (lat - ($lat)), 2) + POW(69.1 * (($lng) - lng) * COS(lat / 57.3), 2) AS distance
			      FROM coordinates 
			      inner join address_coordinates  
			      ON (coordinate_id = coordinates.id)
				  HAVING sqrt(distance) < $distance  ORDER BY distance";*/

		$query = "SELECT address_id, 
				(((acos(sin(($lat*pi()/180)) * sin((lat*pi()/180)) + 
				cos(($lat*pi()/180)) * cos((lat*pi()/180)) * cos((($lng - lng) * 
				pi()/180)))) * 180 / pi()) * 60 * 1.1515 * 1.609344) as distance
				FROM coordinates 
				INNER JOIN address_coordinates  
				ON (coordinates.id = address_coordinates.coordinate_id)
				having distance <= $distance order by distance";

		$result = $this->Coordinate->query($query);
				
		$result = implode(',',Set::extract($result,'{n}.address_coordinates.address_id'));
		
		//return "address_id in($result) order by Field(address_id,$result)";

		$result = $this->AddressEstablishment->find('all',array('conditions'=>array("address_id in($result) order by Field(address_id,$result)"),
																'fields'=>'establishment_id')
		);
				
		return Set::extract($result,'{n}.AddressEstablishment.establishment_id');
		
	}

	public function listCategoriesByLocation ( $lat , $lng , $distance = 1 ) {
		
		$est_id = $this->getEstablishmentByGeo( $lat , $lng , $distance );
		
		return $this->Category->findAllEstablishmentByIdOrderByCategory( $est_id );
				
	}

	public function test ( $lat =  -22.7633391 , $lng = -43.4869894 , $distance = 1 ) {
		header('Content-Type: application/json');
		
		$this->autoRender = false;
	
		$query = "SELECT address_id,
		(((acos(sin(($lat*pi()/180)) * sin((lat*pi()/180)) + cos(($lat*pi()/180)) 
			* cos((lat*pi()/180)) * cos((($lng - lng) * pi()/180)))) * 180 / pi()) * 60 * 1.1515 * 1.609344) as distance
		FROM coordinates 
		INNER JOIN address_coordinates  
		ON (coordinates.id = address_coordinates.coordinate_id)
		having distance <= $distance order by distance" ;


		$result = $this->Coordinate->query($query);
		

		$result = array_keys(Set::combine($result,'{n}.address_coordinates.address_id'));
		$result = $this->AddressEstablishment->find('all',array('conditions'=>array('address_id'=>$result),'fields'=>'establishment_id'));
		
		$est_id =  array_keys(Set::combine($result,'{n}.AddressEstablishment.establishment_id'));


		$cat = $this->Category->findAllEstablishmentByIdOrderByCategory($est_id);
		var_dump($cat);

		die;


	}

	private function getAddressByFullText($fulltext){

		$query = "SELECT id FROM addresses WHERE MATCH(country,state,city,neighborhood,street_address,street_number,post_box) AGAINST ('$fulltext')";
		$result = $this->Address->query($query);
		$result = array_keys(Set::combine($result,'{n}.addresses.id'));
		$result = $this->AddressEstablishment->find('all',array('conditions'=>array('address_id'=>$result),'fields'=>'establishment_id'));
		
		return array_keys(Set::combine($result,'{n}.AddressEstablishment.establishment_id'));
	}

 	function saveCommentAndRate(){

 		$data = $this->request->data;

 		if (!$data) {
 			die(json_encode('no data'));
 		}

 		if ( $data['Rate'] && $data['EstablishmentRate'] && $data['RateUser']) {

            $data['Rate']['description'] = $data['Comment']['description'];
 			$this->Rate->saveRateAndComment($data);
 		}

 		if ( $data['Comment'] && $data['CommentEstablishment'] && $data['CommentUser'] ) { 
 			$this->Comment->saveCommentUserOrCommentEstablishment($data);
 		}


 	}

 	function testUser(){
 		
 		$data = array('Profile' => array('description' => 'meu profile ae!' , 'gender' => 'M' , 'full_name' => 'Jonas Porto' , 'path_to_profile_image' => '/img/profile/jonasporto.jpg'));
 		$this->User->id = $this->Auth->user('id');
 		$this->User->saveUserProfile($data);

 	}

 	function uploadUserFilesToEstablishment(){
 		
 		header('Access-Control-Allow-Origin: *');  
 		
 		$this->autoRender = false;

 		# no surprises filter params in the url
 		$url_params = array('establishment_id' => true,'user_id' => true);
 		$url_params = array_intersect_key($this->params['url'], $url_params);
 		
 	//	var_dump($_FILES);
 		foreach ($_FILES["images"]["error"] as $key => $error) {
		 
			$this->File->create();

			if ($error == UPLOAD_ERR_OK) {
		 
				$name = $_FILES["images"]["name"][$key];
		    	$tmp_name = $_FILES['images']['tmp_name'][$key];
		    	
		    	# img/establishment/:establishment_id/
		    	$path = 'img' . DS . 'establishment'. DS . $url_params['establishment_id'] . DS;

		    	mkdir($path, 0700, true);

		    	$fullpath = WWW_ROOT . $path;

			 	if (move_uploaded_file($tmp_name, $fullpath . $name)) {
				# save references for the file in db	
			    	$saved_files[$key] = $url_params;
			 		$this->File->save(compact('name','path'));
					$saved_files[$key]['file_id'] = $this->File->id;
			 	}
		  	}
		}

		# vincula tudo
		$this->FileUser->saveMany($saved_files);
		$this->EstablishmentFile->saveMany($saved_files);
	}

 	function saveBookmark(){
 		
 		header('Access-Control-Allow-Origin: *');  
 		
 		$this->autoRender = false;

 		$data = $this->request->data;
 		$isBookmarked = $this->Bookmark->findAllByUserIdAndEstablishmentId($data['Bookmark']['user_id'],
 																$data['Bookmark']['establishment_id']);
 		if($isBookmarked){
 			die(json_encode('is Bookmarked'));
 		}

 		if (!$data) {
 			die(json_encode('no data'));
 		}

 		if ( $data['Bookmark']) {

            $this->Bookmark->save($data);
     	}


 	}

 	function removeBookmark(){

 		header('Access-Control-Allow-Origin: *');  
 		
 		$this->autoRender = false;
 		
 		$data = $this->request->data;

 		$this->Bookmark->deleteAll($data['Bookmark']);

 		echo json_encode($this->Bookmark->findAllByUserId($data['Bookmark']['user_id']));



 	}

 	function findBookmarkUser($id){
 		header('Access-Control-Allow-Origin: *');  
 		$this->autoRender = false;
 		$bookmark = Set::extract('{n}.Bookmark.establishment_id',$this->Bookmark->findAllByUserId($id));
 		$establishment = $this->Establishment->findAllById($bookmark);
 		echo json_encode($establishment);
 	}

 	function listDeal($cod = 'geolocation',$param1 = null,$param2 = null,$param3=null){
 		
 		header('Access-Control-Allow-Origin: *');  
 		
 		$this->autoRender = false;
 		
 		if($cod =='geolocation'){
 		
 			if($param3) $est_id = $this->getEstablishmentByGeo($param1,$param2,$param3);
			else if($param1 && $param2 != null) $est_id = $this->getEstablishmentByGeo($param1,$param2);
			$deal_id = Set::extract('{n}.DealEstablishment.deal_id',$this->Deal->DealEstablishment->find('all',array('conditions'=>array('establishment_id'=>$est_id))));	
			$deal_conditions['conditions'] = array('Deal.id' => $deal_id);
		}	
 		
 		$deals = $this->Deal->find('all',$deal_conditions);
 		return json_encode($deals);
 	}

 }
