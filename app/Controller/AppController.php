<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller{
	
	public $media_type;

	
	public $components = array(
	        'Session',
	        'Auth' => array(
	            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
	            'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
	        )
	    );

	public $actsAs = array('Containable');

	 function beforeFilter() {
	 	
	 	if (strtoupper(@$this->params['named']['media-type']) == 'JSON') {
	 		$this->autoRender = false;
	 		header('Access-Control-Allow-Origin: *');
	 		$this->media_type = 'JSON';

	 	}
        $this->Auth->allow('add');
    }


/*
$this->Auth->authError = 'Area Restrita! Efetue login!'; // Mensagem ao entrar em area restrita
$this->Auth->loginError = 'Nome de usuario ou senha não conferem!'; // Mensagem quando não se autenticar
$this->Auth->userModel = 'User';

$this->Auth->loginRedirect = array('action' => 'index',
'controller' => 'establishments');

$this->Auth->fields = array('username' => 'username','password'=>'password');
$this->Auth->loginAction = array(
'controller' => 'users',
    'action' => 'login'
);

$user['id'] = $this->Auth->user('id');
$user['username'] = $this->Auth->user('username');
$this->set(compact('user'));
*/
/*
$controller = get_class($this);
$methods = get_class_methods($controller);

$this->Acl->testeacl();
//var_dump($this);
if($this->request->action == "index"){
	$this->redirect(array('users/teste'));
}*/

}
