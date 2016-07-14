<?php
App::uses('AppController', 'Controller');
/**
 * Cricticas Controller
 *
 * @property Crictica $Crictica
 * @property PaginatorComponent $Paginator
 */
class CricticasController extends AppController {

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
		$this->Crictica->recursive = 0;
		$this->set('cricticas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Crictica->exists($id)) {
			throw new NotFoundException(__('Invalid crictica'));
		}
		$options = array('conditions' => array('Crictica.' . $this->Crictica->primaryKey => $id));
		$this->set('crictica', $this->Crictica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Crictica->create();
			if ($this->Crictica->save($this->request->data)) {
				$this->Session->setFlash(__('The crictica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The crictica could not be saved. Please, try again.'));
			}
		}
		$referencias = $this->Crictica->Referencium->find('list');
		$this->set(compact('referencias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Crictica->exists($id)) {
			throw new NotFoundException(__('Invalid crictica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Crictica->save($this->request->data)) {
				$this->Session->setFlash(__('The crictica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The crictica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Crictica.' . $this->Crictica->primaryKey => $id));
			$this->request->data = $this->Crictica->find('first', $options);
		}
		$referencias = $this->Crictica->Referencium->find('list');
		$this->set(compact('referencias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Crictica->id = $id;
		if (!$this->Crictica->exists()) {
			throw new NotFoundException(__('Invalid crictica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Crictica->delete()) {
			$this->Session->setFlash(__('The crictica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The crictica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
