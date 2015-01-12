<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property CategoryDish $CategoryDish
 * @property CategoryEstablishment $CategoryEstablishment
 */
class Category extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CategoryDish' => array(
			'className' => 'CategoryDish',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'CategoryEstablishment' => array(
			'className' => 'CategoryEstablishment',
			'foreignKey' => 'category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	function findAllEstablishmentByIdOrderByCategory($est_id = null){
		
		if(is_null($est_id)){
		
			return;
		
		}elseif(is_array($est_id)){
			$est_id = implode(',',$est_id);
		}

		$query = "SELECT * FROM categories  
				  inner join category_establishments  
				  on(categories.id = category_establishments.category_id)
				  where category_establishments.establishment_id in($est_id) order by title";

		return $this->query($query);
	}
}
