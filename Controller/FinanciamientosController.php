<?php
App::uses('AppController', 'Controller');
/**
 * Financiamientos Controller
 *
 * @property Financiamiento $Financiamiento
 * @property PaginatorComponent $Paginator
 */
class FinanciamientosController extends AppController {

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
		$this->Financiamiento->recursive = 0;
		$this->set('financiamientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Financiamiento->exists($id)) {
			throw new NotFoundException(__('Invalid financiamiento'));
		}
		$options = array('conditions' => array('Financiamiento.' . $this->Financiamiento->primaryKey => $id));
		$this->set('financiamiento', $this->Financiamiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Financiamiento->create();
			if ($this->Financiamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The financiamiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financiamiento could not be saved. Please, try again.'));
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
		if (!$this->Financiamiento->exists($id)) {
			throw new NotFoundException(__('Invalid financiamiento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Financiamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The financiamiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financiamiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Financiamiento.' . $this->Financiamiento->primaryKey => $id));
			$this->request->data = $this->Financiamiento->find('first', $options);
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
		$this->Financiamiento->id = $id;
		if (!$this->Financiamiento->exists()) {
			throw new NotFoundException(__('Invalid financiamiento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Financiamiento->delete()) {
			$this->Session->setFlash(__('The financiamiento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The financiamiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
