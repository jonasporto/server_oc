<?php 
	
	App::import('Vendor','fb-php-sdk/facebook');
	
	class FBComponent extends Component{

	private $facebook;

	function __construct(){
		$this->facebook = new Facebook(array(
        	'appId'  => '1477767125784966',
        	'secret' => 'f45183283e9f5ad2a3143cf7e3ad0661'
    	));

    	return $this->facebook;
    }

	 public function getLoginURL($scope = array('scope' => 'publish_stream','redirect_uri' => 'http://jonasporto.info/oc/users/add_fb_user')){
	 	return $this->facebook->getLoginUrl($scope);
	 }

	 public function isUserLogged(){
	 	
	 	return $this->facebook->getUser();
	 }

	 public function logout(){
	 	return $this->facebook->destroySession();
	 }
	 	 
	function api($param){
		return $this->facebook->api($param);
	}

	 


	}