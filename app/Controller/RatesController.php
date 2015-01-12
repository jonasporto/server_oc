<?php
App::uses('AppController', 'Controller');
/**
 * Rates Controller
 *
 * @property Rate $Rate
 * @property PaginatorComponent $Paginator
 */
class RatesController extends AppController {

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
		$this->Rate->recursive = 0;
		$this->set('rates', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rate->exists($id)) {
			throw new NotFoundException(__('Invalid rate'));
		}
		$options = array('conditions' => array('Rate.' . $this->Rate->primaryKey => $id));
		$this->set('rate', $this->Rate->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rate->create();
			if ($this->Rate->save($this->request->data)) {
				
				$this->Session->setFlash(__('The rate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate could not be saved. Please, try again.'));
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
		if (!$this->Rate->exists($id)) {
			throw new NotFoundException(__('Invalid rate'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rate->save($this->request->data)) {
				$this->Session->setFlash(__('The rate has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rate could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rate.' . $this->Rate->primaryKey => $id));
			$this->request->data = $this->Rate->find('first', $options);
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
		$this->Rate->id = $id;
		if (!$this->Rate->exists()) {
			throw new NotFoundException(__('Invalid rate'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rate->delete()) {
			$this->Session->setFlash(__('The rate has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rate could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
