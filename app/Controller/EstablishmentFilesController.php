<?php
App::uses('AppController', 'Controller');
/**
 * EstablishmentFiles Controller
 *
 * @property EstablishmentFile $EstablishmentFile
 * @property PaginatorComponent $Paginator
 */
class EstablishmentFilesController extends AppController {

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
		$this->EstablishmentFile->recursive = 0;
		$this->set('establishmentFiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstablishmentFile->exists($id)) {
			throw new NotFoundException(__('Invalid establishment file'));
		}
		$options = array('conditions' => array('EstablishmentFile.' . $this->EstablishmentFile->primaryKey => $id));
		$this->set('establishmentFile', $this->EstablishmentFile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstablishmentFile->create();
			if ($this->EstablishmentFile->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment file could not be saved. Please, try again.'));
			}
		}
		$establishments = $this->EstablishmentFile->Establishment->find('list');
		$files = $this->EstablishmentFile->File->find('list');
		$this->set(compact('establishments', 'files'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EstablishmentFile->exists($id)) {
			throw new NotFoundException(__('Invalid establishment file'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EstablishmentFile->save($this->request->data)) {
				$this->Session->setFlash(__('The establishment file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The establishment file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstablishmentFile.' . $this->EstablishmentFile->primaryKey => $id));
			$this->request->data = $this->EstablishmentFile->find('first', $options);
		}
		$establishments = $this->EstablishmentFile->Establishment->find('list');
		$files = $this->EstablishmentFile->File->find('list');
		$this->set(compact('establishments', 'files'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EstablishmentFile->id = $id;
		if (!$this->EstablishmentFile->exists()) {
			throw new NotFoundException(__('Invalid establishment file'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstablishmentFile->delete()) {
			$this->Session->setFlash(__('The establishment file has been deleted.'));
		} else {
			$this->Session->setFlash(__('The establishment file could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
