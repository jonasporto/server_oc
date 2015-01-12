<?php
App::uses('AppModel', 'Model');
/**
 * Establishment Model
 *
 * @property EstablishmentFile $EstablishmentFile
 * @property EstablishmentPageview $EstablishmentPageview
 * @property EstablishmentRate $EstablishmentRate
 * @property EstablishmentTelephone $EstablishmentTelephone
 */
class Establishment extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	public $hasAndBelongsToMany = array(

		'Address' => array(
			 'joinTable' => 'address_establishments',		
		),
		'Telephone' => array(
			 'joinTable' => 'establishment_telephones',		
		),
		'File' => array(
			 'joinTable' => 'establishment_files',		
		),
		'Rate' => array(
			 'joinTable' => 'establishment_rates',
		),
		'Category' => array(
			 'joinTable' => 'category_establishments',
		),
		'Comment' => array(
			 'joinTable' => 'comment_establishments',
		));

}
