<?php
App::uses('AppController', 'Controller');
/**
 * CategoryDishes Controller
 *
 * @property CategoryDish $CategoryDish
 * @property PaginatorComponent $Paginator
 */
class CategoryDishesController extends AppController {

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
		$this->CategoryDish->recursive = 0;
		$this->set('categoryDishes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoryDish->exists($id)) {
			throw new NotFoundException(__('Invalid category dish'));
		}
		$options = array('conditions' => array('CategoryDish.' . $this->CategoryDish->primaryKey => $id));
		$this->set('categoryDish', $this->CategoryDish->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoryDish->create();
			if ($this->CategoryDish->save($this->request->data)) {
				$this->Session->setFlash(__('The category dish has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category dish could not be saved. Please, try again.'));
			}
		}
		$categories = $this->CategoryDish->Category->find('list');
		$dishes = $this->CategoryDish->Dish->find('list');
		$this->set(compact('categories', 'dishes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoryDish->exists($id)) {
			throw new NotFoundException(__('Invalid category dish'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoryDish->save($this->request->data)) {
				$this->Session->setFlash(__('The category dish has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category dish could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoryDish.' . $this->CategoryDish->primaryKey => $id));
			$this->request->data = $this->CategoryDish->find('first', $options);
		}
		$categories = $this->CategoryDish->Category->find('list');
		$dishes = $this->CategoryDish->Dish->find('list');
		$this->set(compact('categories', 'dishes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoryDish->id = $id;
		if (!$this->CategoryDish->exists()) {
			throw new NotFoundException(__('Invalid category dish'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CategoryDish->delete()) {
			$this->Session->setFlash(__('The category dish has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category dish could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
