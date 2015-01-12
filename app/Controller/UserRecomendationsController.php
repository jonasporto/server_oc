<?php
App::uses('AppController', 'Controller');
/**
 * UserRecomendations Controller
 *
 * @property UserRecomendation $UserRecomendation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UserRecomendationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserRecomendation->recursive = 0;
		$this->set('userRecomendations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserRecomendation->exists($id)) {
			throw new NotFoundException(__('Invalid user recomendation'));
		}
		$options = array('conditions' => array('UserRecomendation.' . $this->UserRecomendation->primaryKey => $id));
		$this->set('userRecomendation', $this->UserRecomendation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserRecomendation->create();
			if ($this->UserRecomendation->save($this->request->data)) {
				$this->Session->setFlash(__('The user recomendation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user recomendation could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserRecomendation->User->find('list');
		$recomendations = $this->UserRecomendation->Recomendation->find('list');
		$toUsers = $this->UserRecomendation->ToUser->find('list');
		$this->set(compact('users', 'recomendations', 'toUsers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserRecomendation->exists($id)) {
			throw new NotFoundException(__('Invalid user recomendation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserRecomendation->save($this->request->data)) {
				$this->Session->setFlash(__('The user recomendation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user recomendation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserRecomendation.' . $this->UserRecomendation->primaryKey => $id));
			$this->request->data = $this->UserRecomendation->find('first', $options);
		}
		$users = $this->UserRecomendation->User->find('list');
		$recomendations = $this->UserRecomendation->Recomendation->find('list');
		$toUsers = $this->UserRecomendation->ToUser->find('list');
		$this->set(compact('users', 'recomendations', 'toUsers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserRecomendation->id = $id;
		if (!$this->UserRecomendation->exists()) {
			throw new NotFoundException(__('Invalid user recomendation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserRecomendation->delete()) {
			$this->Session->setFlash(__('The user recomendation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user recomendation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
