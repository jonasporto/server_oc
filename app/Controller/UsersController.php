<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController

{
    /**
     * Components
     *
     * @var array
     */
    public $components = array(

        'Paginator'
    );
    /**
     * index method
     *
     * @return void
     */
    function index()
    {
        $user = $this->Auth->user();
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }
    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)

    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array(
            'conditions' => array(
                'User.' . $this->User->primaryKey => $id
            )
        );
        $this->set('user', $this->User->find('first', $options));
    }
    public function add()

    {
        if ($this->request->is('post')) {
            $this->log($this->request->data, 'request');
            $dataSource = $this->User->getDataSource();
            $dataSource->begin();
            $error = $this->userOrEmailAlreadyExist();
            if ($error) {
                return json_encode($error);
            }
            if ($this->User->saveAll($this->request->data)) {
                $this->request->data['EmailUser']['user_id'] = $this->User->id;
                if ($this->User->Email->saveAll($this->request->data)) {
                    $this->request->data['EmailUser']['email_id'] = $this->User->Email->id;
                    if ($this->User->EmailUser->save($this->request->data)) {
                        $dataSource->commit();
                        if ($this->Auth->login()) {
                            if ($this->media_type == 'JSON') {
                                return true;
                            }
                            return $this->redirect($this->Auth->redirect());
                        }
                    }
                }
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array(
                    'action' => 'index'
                ));
            }
            else {
                $dataSource->rollback();
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }
    function userOrEmailAlreadyExist()
    {
        $data = $this->request->data;
        $error = false;
        if (!$data['Email']['address'] && !$error) {
            $error['error']['msg'] = 'Email nÃ£o pode ficar vazio';
        }
        if (!$data['User']['username'] && !$error) {
            $error['error']['msg'] = 'Nome de usuario nÃ£o pode ficar vazio';
        }
        if (!$data['User']['password'] && !$error) {
            $error['error']['msg'] = 'O campo senha nÃ£o pode ficar vazio';
        }
        if ($this->User->Email->findByAddress($data['Email']['address']) && !$error) {
            $error['error']['msg'] = 'Email jÃ¡ cadastrado';
        }
        if ($this->User->findByUsername($data['User']['username']) && !$error) {
            $error['error']['msg'] = 'UsuÃ¡rio jÃ¡ cadastrado';
        }
        return $error;
    }
    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)

    {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array(
            'post',
            'put'
        ))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array(
                    'action' => 'index'
                ));
            }
            else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        else {
            $options = array(
                'conditions' => array(
                    'User.' . $this->User->primaryKey => $id
                )
            );
            $this->request->data = $this->User->find('first', $options);
        }
    }
    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)

    {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        }
        else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array(
            'action' => 'index'
        ));
    }
    public function beforeFilter()

    {
        parent::beforeFilter();
        $this->Auth->allow('add_fb_user', 'add', 'login', 'isLogged', 'loginByEmailOrUsername', 'logout');
    }
    public function login()

    {
        session_destroy();
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        }
        return $this->Session->setFlash(__('Invalid username or password, try again'));
    }
    function logout()
    {
        $this->autoRender = false;
        // if($this->FB->isUserLogged()) $this->FB->logout();
        $this->log($this->Auth->user() , 'logout');
        return json_encode($this->Auth->logout());
    }
    function teste()
    {
        $controllers = App::objects('controller');
        App::import('controllers', $controllers[35]);
        var_dump($controllers);
        $super = get_class_methods(get_parent_class($controllers[35]));
        $sub = get_class_methods($controllers[35]);
        $methods = array_diff($sub, $super);
        var_dump(__FUNCTION__);
        var_dump($sub);
        var_dump($methods);
        var_dump($super);
    }
    function socialLogin($param1 = null, $type = 'fb')
    {
        $this->autoRender = false;
        var_dump($url = $this->FB->getLoginURL());
        var_dump($this->FB->isUserLogged());
        if ($param1) $this->FB->logout();
        var_dump("<a href=\"$url\">logar</a>");
    }
    function isLogged()
    {
        $data = array(
            'User' => array(
                'username' => 'jonasporto',
                'password' => 'jonasporto'
            )
        );
        $this->request->data = $data;
        $this->Auth->login();
        var_dump(!!$this->Auth->user());
    }
    public function add_fb_user()

    {
        $user = $this->FB->isUserLogged();
        echo $user;
        if (!$user) return;
        $fb_user = $this->FB->api("/$user");
        $this->User->create();
        $user = array(
            'User' => array(
                'username' => $fb_user['username'],
                'password' => $fb_user['username']
            )
        );
        if ($user = $this->User->save($user) || $user = $this->User->findByUsername($fb_user['username'])) {
            return $this->login($user);
        }
        else {
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }
    public function loginByEmailOrUsername()

    {
        $this->Auth->logout();
        $data = $this->request->data;
        if ($data) {
            $user = $this->User->findByUsernameOrEmailAndPassword($data);
            if ($user) {
                $this->Auth->login($user);
            }
        }
        if (!$this->Auth->login()) {
            return json_encode(array(
                'error' => array(
                    'msg' => 'UsuÃ¡rio ou senha incorretos !'
                )
            ));
        }
        $user[0]['User']['password'] = $data['User']['password'];
        return json_encode($user[0]);
    }
}
