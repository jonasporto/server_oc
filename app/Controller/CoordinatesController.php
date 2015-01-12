<?php
App::uses('AppController', 'Controller');
/**
 * Coordinates Controller
 *
 * @property Coordinate $Coordinate
 * @property PaginatorComponent $Paginator
 */
class CoordinatesController extends AppController {

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
		$this->Coordinate->recursive = 0;
		$this->set('coordinates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Coordinate->exists($id)) {
			throw new NotFoundException(__('Invalid coordinate'));
		}
		$options = array('conditions' => array('Coordinate.' . $this->Coordinate->primaryKey => $id));
		$this->set('coordinate', $this->Coordinate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Coordinate->create();
			if ($this->Coordinate->save($this->request->data)) {
				$this->Session->setFlash(__('The coordinate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordinate could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Coordinate->exists($id)) {
			throw new NotFoundException(__('Invalid coordinate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Coordinate->save($this->request->data)) {
				$this->Session->setFlash(__('The coordinate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coordinate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Coordinate.' . $this->Coordinate->primaryKey => $id));
			$this->request->data = $this->Coordinate->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Coordinate->id = $id;
		if (!$this->Coordinate->exists()) {
			throw new NotFoundException(__('Invalid coordinate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coordinate->delete()) {
			$this->Session->setFlash(__('The coordinate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The coordinate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
