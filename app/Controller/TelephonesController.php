<?php
App::uses('AppController', 'Controller');
/**
 * Telephones Controller
 *
 * @property Telephone $Telephone
 * @property PaginatorComponent $Paginator
 */
class TelephonesController extends AppController {

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
		$this->Telephone->recursive = 0;
		$this->set('telephones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Telephone->exists($id)) {
			throw new NotFoundException(__('Invalid telephone'));
		}
		$options = array('conditions' => array('Telephone.' . $this->Telephone->primaryKey => $id));
		$this->set('telephone', $this->Telephone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Telephone->create();
			if ($this->Telephone->save($this->request->data)) {
				$this->Session->setFlash(__('The telephone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The telephone could not be saved. Please, try again.'));
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
		if (!$this->Telephone->exists($id)) {
			throw new NotFoundException(__('Invalid telephone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Telephone->save($this->request->data)) {
				$this->Session->setFlash(__('The telephone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The telephone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Telephone.' . $this->Telephone->primaryKey => $id));
			$this->request->data = $this->Telephone->find('first', $options);
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
		$this->Telephone->id = $id;
		if (!$this->Telephone->exists()) {
			throw new NotFoundException(__('Invalid telephone'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Telephone->delete()) {
			$this->Session->setFlash(__('The telephone has been deleted.'));
		} else {
			$this->Session->setFlash(__('The telephone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
