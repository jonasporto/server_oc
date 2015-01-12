<?php
App::uses('AppController', 'Controller');
/**
 * ActionDishes Controller
 *
 * @property ActionDish $ActionDish
 * @property PaginatorComponent $Paginator
 */
class ActionDishesController extends AppController {

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
		$this->ActionDish->recursive = 0;
		$this->set('actionDishes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActionDish->exists($id)) {
			throw new NotFoundException(__('Invalid action dish'));
		}
		$options = array('conditions' => array('ActionDish.' . $this->ActionDish->primaryKey => $id));
		$this->set('actionDish', $this->ActionDish->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ActionDish->create();
			if ($this->ActionDish->save($this->request->data)) {
				$this->Session->setFlash(__('The action dish has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The action dish could not be saved. Please, try again.'));
			}
		}
		$dishes = $this->ActionDish->Dish->find('list');
		$actions = $this->ActionDish->Action->find('list');
		$this->set(compact('dishes', 'actions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ActionDish->exists($id)) {
			throw new NotFoundException(__('Invalid action dish'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ActionDish->save($this->request->data)) {
				$this->Session->setFlash(__('The action dish has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The action dish could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ActionDish.' . $this->ActionDish->primaryKey => $id));
			$this->request->data = $this->ActionDish->find('first', $options);
		}
		$dishes = $this->ActionDish->Dish->find('list');
		$actions = $this->ActionDish->Action->find('list');
		$this->set(compact('dishes', 'actions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ActionDish->id = $id;
		if (!$this->ActionDish->exists()) {
			throw new NotFoundException(__('Invalid action dish'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ActionDish->delete()) {
			$this->Session->setFlash(__('The action dish has been deleted.'));
		} else {
			$this->Session->setFlash(__('The action dish could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
