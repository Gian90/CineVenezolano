<?php
App::uses('AppController', 'Controller');
/**
 * CasasProductoras Controller
 *
 * @property CasasProductora $CasasProductora
 * @property PaginatorComponent $Paginator
 */
class CasasProductorasController extends AppController {

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
		$this->CasasProductora->recursive = 0;
		$this->set('casasProductoras', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CasasProductora->exists($id)) {
			throw new NotFoundException(__('Invalid casas productora'));
		}
		$options = array('conditions' => array('CasasProductora.' . $this->CasasProductora->primaryKey => $id));
		$this->set('casasProductora', $this->CasasProductora->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CasasProductora->create();
			if ($this->CasasProductora->save($this->request->data)) {
				$this->Session->setFlash(__('The casas productora has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casas productora could not be saved. Please, try again.'));
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
		if (!$this->CasasProductora->exists($id)) {
			throw new NotFoundException(__('Invalid casas productora'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CasasProductora->save($this->request->data)) {
				$this->Session->setFlash(__('The casas productora has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casas productora could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CasasProductora.' . $this->CasasProductora->primaryKey => $id));
			$this->request->data = $this->CasasProductora->find('first', $options);
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
		$this->CasasProductora->id = $id;
		if (!$this->CasasProductora->exists()) {
			throw new NotFoundException(__('Invalid casas productora'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CasasProductora->delete()) {
			$this->Session->setFlash(__('The casas productora has been deleted.'));
		} else {
			$this->Session->setFlash(__('The casas productora could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
