<?php
App::uses('AppModel', 'Model');
/**
 * Address Model
 *
 * @property AddressCoordinate $AddressCoordinate
 * @property AddressEstablishment $AddressEstablishment
 */
class Address extends AppModel {

	public $hasAndBelongsToMany = array(
		'Coordinate' => array(
		  'joinTable' => 'address_coordinates',
		  ));

}
