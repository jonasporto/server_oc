<?php
App::uses('AppController', 'Controller');
/**
 * CoordinateUsers Controller
 *
 * @property CoordinateUser $CoordinateUser
 * @property PaginatorComponent $Paginator
 */
class CoordinateUsersController extends AppController {

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
		$this->CoordinateUser->recursive = 0;
		$this->set('coordinateUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CoordinateUser->exists($id)) {
			throw new NotFoundException(__('Invalid coordinate user'));
		}
		$options = array('conditions' => array('CoordinateUser.' . $this->CoordinateUser->primaryKey => $id));
		$this->set('coordinateUser', $this->CoordinateUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CoordinateUser->create();
			if ($this->CoordinateUser->save($this->request->data)) {
				$this->Session->setFlash(__('The coordinate user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordinate user could not be saved. Please, try again.'));
			}
		}
		$users = $this->CoordinateUser->User->find('list');
		$coordinates = $this->CoordinateUser->Coordinate->find('list');
		$this->set(compact('users', 'coordinates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CoordinateUser->exists($id)) {
			throw new NotFoundException(__('Invalid coordinate user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CoordinateUser->save($this->request->data)) {
				$this->Session->setFlash(__('The coordinate user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordinate user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CoordinateUser.' . $this->CoordinateUser->primaryKey => $id));
			$this->request->data = $this->CoordinateUser->find('first', $options);
		}
		$users = $this->CoordinateUser->User->find('list');
		$coordinates = $this->CoordinateUser->Coordinate->find('list');
		$this->set(compact('users', 'coordinates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CoordinateUser->id = $id;
		if (!$this->CoordinateUser->exists()) {
			throw new NotFoundException(__('Invalid coordinate user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CoordinateUser->delete()) {
			$this->Session->setFlash(__('The coordinate user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The coordinate user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
