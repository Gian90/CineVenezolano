<?php
App::uses('AppController', 'Controller');
/**
 * Referencias Controller
 *
 * @property Referencia $Referencia
 * @property PaginatorComponent $Paginator
 */
class ReferenciasController extends AppController {

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
		$this->Referencia->recursive = 0;
		$this->set('referencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Referencia->exists($id)) {
			throw new NotFoundException(__('Invalid referencia'));
		}
		$options = array('conditions' => array('Referencia.' . $this->Referencia->primaryKey => $id));
		$this->set('referencia', $this->Referencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Referencia->create();
			if ($this->Referencia->save($this->request->data)) {
				$this->Session->setFlash(__('The referencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referencia could not be saved. Please, try again.'));
			}
		}
		$peliculas = $this->Referencia->Pelicula->find('list');
		$cricticas = $this->Referencia->Crictica->find('list');
		$this->set(compact('peliculas', 'cricticas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Referencia->exists($id)) {
			throw new NotFoundException(__('Invalid referencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Referencia->save($this->request->data)) {
				$this->Session->setFlash(__('The referencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Referencia.' . $this->Referencia->primaryKey => $id));
			$this->request->data = $this->Referencia->find('first', $options);
		}
		$peliculas = $this->Referencia->Pelicula->find('list');
		$cricticas = $this->Referencia->Crictica->find('list');
		$this->set(compact('peliculas', 'cricticas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Referencia->id = $id;
		if (!$this->Referencia->exists()) {
			throw new NotFoundException(__('Invalid referencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Referencia->delete()) {
			$this->Session->setFlash(__('The referencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The referencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
