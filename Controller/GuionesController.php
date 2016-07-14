<?php
App::uses('AppController', 'Controller');
/**
 * Guiones Controller
 *
 * @property Guione $Guione
 * @property PaginatorComponent $Paginator
 */
class GuionesController extends AppController {

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
		$this->Guione->recursive = 0;
		$this->set('guiones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Guione->exists($id)) {
			throw new NotFoundException(__('Invalid guione'));
		}
		$options = array('conditions' => array('Guione.' . $this->Guione->primaryKey => $id));
		$this->set('guione', $this->Guione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Guione->create();
			if ($this->Guione->save($this->request->data)) {
				$this->Session->setFlash(__('The guione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guione could not be saved. Please, try again.'));
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
		if (!$this->Guione->exists($id)) {
			throw new NotFoundException(__('Invalid guione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Guione->save($this->request->data)) {
				$this->Session->setFlash(__('The guione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Guione.' . $this->Guione->primaryKey => $id));
			$this->request->data = $this->Guione->find('first', $options);
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
		$this->Guione->id = $id;
		if (!$this->Guione->exists()) {
			throw new NotFoundException(__('Invalid guione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Guione->delete()) {
			$this->Session->setFlash(__('The guione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The guione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
