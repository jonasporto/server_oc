<?php
App::uses('AppController', 'Controller');
/**
 * ActionUsers Controller
 *
 * @property ActionUser $ActionUser
 * @property PaginatorComponent $Paginator
 */
class ActionUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ActionUser->recursive = 0;
		$this->set('actionUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActionUser->exists($id)) {
			throw new NotFoundException(__('Invalid action user'));
		}
		$options = array('conditions' => array('ActionUser.' . $this->ActionUser->primaryKey => $id));
		$this->set('actionUser', $this->ActionUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActionUser->create();
			if ($this->ActionUser->save($this->request->data)) {
				$this->Session->setFlash(__('The action user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The action user could not be saved. Please, try again.'));
			}
		}
		$users = $this->ActionUser->User->find('list');
		$actions = $this->ActionUser->Action->find('list');
		$this->set(compact('users', 'actions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActionUser->exists($id)) {
			throw new NotFoundException(__('Invalid action user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActionUser->save($this->request->data)) {
				$this->Session->setFlash(__('The action user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The action user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActionUser.' . $this->ActionUser->primaryKey => $id));
			$this->request->data = $this->ActionUser->find('first', $options);
		}
		$users = $this->ActionUser->User->find('list');
		$actions = $this->ActionUser->Action->find('list');
		$this->set(compact('users', 'actions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActionUser->id = $id;
		if (!$this->ActionUser->exists()) {
			throw new NotFoundException(__('Invalid action user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActionUser->delete()) {
			$this->Session->setFlash(__('The action user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The action user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
