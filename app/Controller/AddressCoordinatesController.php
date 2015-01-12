<?php
App::uses('AppController', 'Controller');
/**
 * AddressCoordinates Controller
 *
 * @property AddressCoordinate $AddressCoordinate
 * @property PaginatorComponent $Paginator
 */
class AddressCoordinatesController extends AppController {

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
		$this->AddressCoordinate->recursive = 0;
		$this->set('addressCoordinates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AddressCoordinate->exists($id)) {
			throw new NotFoundException(__('Invalid address coordinate'));
		}
		$options = array('conditions' => array('AddressCoordinate.' . $this->AddressCoordinate->primaryKey => $id));
		$this->set('addressCoordinate', $this->AddressCoordinate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AddressCoordinate->create();
			if ($this->AddressCoordinate->save($this->request->data)) {
				$this->Session->setFlash(__('The address coordinate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address coordinate could not be saved. Please, try again.'));
			}
		}
		$addresses = $this->AddressCoordinate->Address->find('list');
		$coordinates = $this->AddressCoordinate->Coordinate->find('list');
		$this->set(compact('addresses', 'coordinates'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AddressCoordinate->exists($id)) {
			throw new NotFoundException(__('Invalid address coordinate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AddressCoordinate->save($this->request->data)) {
				$this->Session->setFlash(__('The address coordinate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address coordinate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AddressCoordinate.' . $this->AddressCoordinate->primaryKey => $id));
			$this->request->data = $this->AddressCoordinate->find('first', $options);
		}
		$addresses = $this->AddressCoordinate->Address->find('list');
		$coordinates = $this->AddressCoordinate->Coordinate->find('list');
		$this->set(compact('addresses', 'coordinates'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AddressCoordinate->id = $id;
		if (!$this->AddressCoordinate->exists()) {
			throw new NotFoundException(__('Invalid address coordinate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AddressCoordinate->delete()) {
			$this->Session->setFlash(__('The address coordinate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The address coordinate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
