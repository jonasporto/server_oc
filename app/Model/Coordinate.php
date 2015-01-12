<?php
App::uses('AppModel', 'Model');
/**
 * Coordinate Model
 *
 * @property CoordinateUser $CoordinateUser
 */
class Coordinate extends AppModel {

	function getEstablishmentByGeo($lat,$lng,$distance = 1){
 		
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

		$result = $this->query($query);
		
		$result = array_keys(Set::combine($result,'{n}.address_coordinates.address_id'));
	
		$result = $this->AddressEstablishment->find('all',array('conditions'=>array('address_id'=>$result),
																'fields'=>'establishment_id')
		);
				
		return array_keys(Set::combine($result,'{n}.AddressEstablishment.establishment_id'));
		
	}

}
