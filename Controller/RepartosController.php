<?php
App::uses('AppController', 'Controller');
/**
 * Repartos Controller
 *
 * @property Reparto $Reparto
 * @property PaginatorComponent $Paginator
 */
class RepartosController extends AppController {

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
		$this->Reparto->recursive = 0;
		$this->set('repartos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reparto->exists($id)) {
			throw new NotFoundException(__('Invalid reparto'));
		}
		$options = array('conditions' => array('Reparto.' . $this->Reparto->primaryKey => $id));
		$this->set('reparto', $this->Reparto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reparto->create();
			if ($this->Reparto->save($this->request->data)) {
				$this->Session->setFlash(__('The reparto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reparto could not be saved. Please, try again.'));
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
		if (!$this->Reparto->exists($id)) {
			throw new NotFoundException(__('Invalid reparto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reparto->save($this->request->data)) {
				$this->Session->setFlash(__('The reparto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reparto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reparto.' . $this->Reparto->primaryKey => $id));
			$this->request->data = $this->Reparto->find('first', $options);
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
		$this->Reparto->id = $id;
		if (!$this->Reparto->exists()) {
			throw new NotFoundException(__('Invalid reparto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reparto->delete()) {
			$this->Session->setFlash(__('The reparto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reparto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
