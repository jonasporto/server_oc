<?php
App::uses('AppController', 'Controller');
/**
 * DishPageviews Controller
 *
 * @property DishPageview $DishPageview
 * @property PaginatorComponent $Paginator
 */
class DishPageviewsController extends AppController {

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
		$this->DishPageview->recursive = 0;
		$this->set('dishPageviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DishPageview->exists($id)) {
			throw new NotFoundException(__('Invalid dish pageview'));
		}
		$options = array('conditions' => array('DishPageview.' . $this->DishPageview->primaryKey => $id));
		$this->set('dishPageview', $this->DishPageview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DishPageview->create();
			if ($this->DishPageview->save($this->request->data)) {
				$this->Session->setFlash(__('The dish pageview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dish pageview could not be saved. Please, try again.'));
			}
		}
		$dishes = $this->DishPageview->Dish->find('list');
		$pageviews = $this->DishPageview->Pageview->find('list');
		$this->set(compact('dishes', 'pageviews'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DishPageview->exists($id)) {
			throw new NotFoundException(__('Invalid dish pageview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DishPageview->save($this->request->data)) {
				$this->Session->setFlash(__('The dish pageview has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dish pageview could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DishPageview.' . $this->DishPageview->primaryKey => $id));
			$this->request->data = $this->DishPageview->find('first', $options);
		}
		$dishes = $this->DishPageview->Dish->find('list');
		$pageviews = $this->DishPageview->Pageview->find('list');
		$this->set(compact('dishes', 'pageviews'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DishPageview->id = $id;
		if (!$this->DishPageview->exists()) {
			throw new NotFoundException(__('Invalid dish pageview'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DishPageview->delete()) {
			$this->Session->setFlash(__('The dish pageview has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dish pageview could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
