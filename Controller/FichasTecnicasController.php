<?php
App::uses('AppController', 'Controller');
/**
 * FichasTecnicas Controller
 *
 * @property FichasTecnica $FichasTecnica
 * @property PaginatorComponent $Paginator
 */
class FichasTecnicasController extends AppController {

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
		$this->FichasTecnica->recursive = 0;
		$this->set('fichasTecnicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FichasTecnica->exists($id)) {
			throw new NotFoundException(__('Invalid fichas tecnica'));
		}
		$options = array('conditions' => array('FichasTecnica.' . $this->FichasTecnica->primaryKey => $id));
		$this->set('fichasTecnica', $this->FichasTecnica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FichasTecnica->create();
			if ($this->FichasTecnica->save($this->request->data)) {
				$this->Session->setFlash(__('The fichas tecnica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fichas tecnica could not be saved. Please, try again.'));
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
		if (!$this->FichasTecnica->exists($id)) {
			throw new NotFoundException(__('Invalid fichas tecnica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FichasTecnica->save($this->request->data)) {
				$this->Session->setFlash(__('The fichas tecnica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fichas tecnica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FichasTecnica.' . $this->FichasTecnica->primaryKey => $id));
			$this->request->data = $this->FichasTecnica->find('first', $options);
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
		$this->FichasTecnica->id = $id;
		if (!$this->FichasTecnica->exists()) {
			throw new NotFoundException(__('Invalid fichas tecnica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FichasTecnica->delete()) {
			$this->Session->setFlash(__('The fichas tecnica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fichas tecnica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
