<?php
App::uses('AppController', 'Controller');
/**
 * EstablishmentRates Controller
 *
 * @property EstablishmentRate $EstablishmentRate
 * @property PaginatorComponent $Paginator
 */
class EstablishmentRatesController extends AppController {

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
		$this->EstablishmentRate->recursive = 0;
		$this->set('establishmentRates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstablishmentRate->exists($id)) {
			throw new NotFoundException(__('Invalid establishment rate'));
		}
		$options = array('conditions' => array('EstablishmentRate.' . $this->EstablishmentRate->primaryKey => $id));
		$this->set('establishmentRate', $this->EstablishmentRate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstablishmentRate->create();
			if ($this->EstablishmentRate->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment rate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment rate could not be saved. Please, try again.'));
			}
		}
		$users = $this->EstablishmentRate->User->find('list');
		$rates = $this->EstablishmentRate->Rate->find('list');
		$establishments = $this->EstablishmentRate->Establishment->find('list');
		$this->set(compact('users', 'rates', 'establishments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EstablishmentRate->exists($id)) {
			throw new NotFoundException(__('Invalid establishment rate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EstablishmentRate->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment rate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment rate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstablishmentRate.' . $this->EstablishmentRate->primaryKey => $id));
			$this->request->data = $this->EstablishmentRate->find('first', $options);
		}
		$users = $this->EstablishmentRate->User->find('list');
		$rates = $this->EstablishmentRate->Rate->find('list');
		$establishments = $this->EstablishmentRate->Establishment->find('list');
		$this->set(compact('users', 'rates', 'establishments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EstablishmentRate->id = $id;
		if (!$this->EstablishmentRate->exists()) {
			throw new NotFoundException(__('Invalid establishment rate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstablishmentRate->delete()) {
			$this->Session->setFlash(__('The establishment rate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The establishment rate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
