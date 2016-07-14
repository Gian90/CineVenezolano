<?php
App::uses('AppController', 'Controller');
/**
 * Lugares Controller
 *
 * @property Lugare $Lugare
 * @property PaginatorComponent $Paginator
 */
class LugaresController extends AppController {

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
		$this->Lugare->recursive = 0;
		$this->set('lugares', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lugare->exists($id)) {
			throw new NotFoundException(__('Invalid lugare'));
		}
		$options = array('conditions' => array('Lugare.' . $this->Lugare->primaryKey => $id));
		$this->set('lugare', $this->Lugare->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lugare->create();
			if ($this->Lugare->save($this->request->data)) {
				$this->Session->setFlash(__('The lugare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugare could not be saved. Please, try again.'));
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
		if (!$this->Lugare->exists($id)) {
			throw new NotFoundException(__('Invalid lugare'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lugare->save($this->request->data)) {
				$this->Session->setFlash(__('The lugare has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lugare could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lugare.' . $this->Lugare->primaryKey => $id));
			$this->request->data = $this->Lugare->find('first', $options);
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
		$this->Lugare->id = $id;
		if (!$this->Lugare->exists()) {
			throw new NotFoundException(__('Invalid lugare'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lugare->delete()) {
			$this->Session->setFlash(__('The lugare has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lugare could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
