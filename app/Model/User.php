<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property DishRate $DishRate
 * @property EstablishmentRate $EstablishmentRate
 * @property Follower $Follower
 * @property Pageview $Pageview
 * @property UserRecomendation $UserRecomendation
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $actsAs = array('Containable');

/**
 * hasMany associations
 *
 * @var array
 */

	public $hasMany = array(
		/*'DishRate' => array(
			'className' => 'DishRate',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/
		/*'EstablishmentRate' => array(
			'className' => 'EstablishmentRate',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/
		'Follower' => array(
			'className' => 'Follower',
			'foreignKey' => 'user_id',
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
		/*'Pageview' => array(
			'className' => 'Pageview',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),*/


		
		/*'UserRecomendation' => array(
			'className' => 'UserRecomendation',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)*/
	);
	

	public $hasAndBelongsToMany = array(

		'Email' => array(
			'className' => 'Email',
       		'associationForeignKey' => 'email_id',
			'foreignKey' => 'user_id',
			'joinTable' => 'email_users'
       		),
		'Establishment' => array(
			'className' => 'Establishment',
       		'associationForeignKey' => 'establishment_id',
			'foreignKey' => 'user_id',
			'joinTable' => 'bookmarks'
       		)
		);

	public $belongsTo = array(
		'Profile'
		);

	 public function beforeSave($options=array()) {
        
	    if (isset($this->data['User']['password'])) {
	        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	    }
	    return true;
	}

	public function saveUserProfile($data){
		
		$db = $this->getDataSource();
		var_dump(AuthComponent::user());

		$db->begin();

		if ($data && $this->Profile->save($data)) {
 			
	 		if ($this->saveField('profile_id',$this->Profile->id)) {

	 			$db->commit();
	 			return true;
	 		}
 		}

 		$db->rollback();
 		return false;

	}

	public function findByUsernameOrEmailAndPassword($data){
			
			
			$query = "select * from users User inner join email_users EmailUser on(User.id = EmailUser.user_id)". 
			"inner join emails Email on (EmailUser.email_id = Email.id) where User.username = '".$data['User']['identify']."' and User.password = '".AuthComponent::password($data['User']['password'])."'";
    		

	   		if (filter_var($data['User']['identify'], FILTER_VALIDATE_EMAIL)) {
	    	
	    		$query = "select * from users User inner join email_users EmailUser on(User.id = EmailUser.user_id)". 
				"inner join emails Email on (EmailUser.email_id = Email.id) where Email.address = '".$data['User']['identify']."' and User.password = '".AuthComponent::password($data['User']['password'])."'";

	    	}

			return $this->query($query);

	}



}
