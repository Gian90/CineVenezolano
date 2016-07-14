<?php
App::uses('AppController', 'Controller');
/**
 * Trailers Controller
 *
 * @property Trailer $Trailer
 * @property PaginatorComponent $Paginator
 */
class TrailersController extends AppController {

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
		$this->Trailer->recursive = 0;
		$this->set('trailers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Trailer->exists($id)) {
			throw new NotFoundException(__('Invalid trailer'));
		}
		$options = array('conditions' => array('Trailer.' . $this->Trailer->primaryKey => $id));
		$this->set('trailer', $this->Trailer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Trailer->create();
			if ($this->Trailer->save($this->request->data)) {
				$this->Session->setFlash(__('The trailer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trailer could not be saved. Please, try again.'));
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
		if (!$this->Trailer->exists($id)) {
			throw new NotFoundException(__('Invalid trailer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Trailer->save($this->request->data)) {
				$this->Session->setFlash(__('The trailer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trailer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Trailer.' . $this->Trailer->primaryKey => $id));
			$this->request->data = $this->Trailer->find('first', $options);
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
		$this->Trailer->id = $id;
		if (!$this->Trailer->exists()) {
			throw new NotFoundException(__('Invalid trailer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Trailer->delete()) {
			$this->Session->setFlash(__('The trailer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trailer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
