<?php
App::uses('AppController', 'Controller');
/**
 * Tematicas Controller
 *
 * @property Tematica $Tematica
 * @property PaginatorComponent $Paginator
 */
class TematicasController extends AppController {

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
		$this->Tematica->recursive = 0;
		$this->set('tematicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tematica->exists($id)) {
			throw new NotFoundException(__('Invalid tematica'));
		}
		$options = array('conditions' => array('Tematica.' . $this->Tematica->primaryKey => $id));
		$this->set('tematica', $this->Tematica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tematica->create();
			if ($this->Tematica->save($this->request->data)) {
				$this->Session->setFlash(__('The tematica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tematica could not be saved. Please, try again.'));
			}
		}
		$peliculas = $this->Tematica->Pelicula->find('list');
		$this->set(compact('peliculas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tematica->exists($id)) {
			throw new NotFoundException(__('Invalid tematica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tematica->save($this->request->data)) {
				$this->Session->setFlash(__('The tematica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tematica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tematica.' . $this->Tematica->primaryKey => $id));
			$this->request->data = $this->Tematica->find('first', $options);
		}
		$peliculas = $this->Tematica->Pelicula->find('list');
		$this->set(compact('peliculas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tematica->id = $id;
		if (!$this->Tematica->exists()) {
			throw new NotFoundException(__('Invalid tematica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tematica->delete()) {
			$this->Session->setFlash(__('The tematica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tematica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
