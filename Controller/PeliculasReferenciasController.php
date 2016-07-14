<?php
App::uses('AppController', 'Controller');
/**
 * PeliculasReferencias Controller
 *
 * @property PeliculasReferencia $PeliculasReferencia
 * @property PaginatorComponent $Paginator
 */
class PeliculasReferenciasController extends AppController {

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
		$this->PeliculasReferencia->recursive = 0;
		$this->set('peliculasReferencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculasReferencia->exists($id)) {
			throw new NotFoundException(__('Invalid peliculas referencia'));
		}
		$options = array('conditions' => array('PeliculasReferencia.' . $this->PeliculasReferencia->primaryKey => $id));
		$this->set('peliculasReferencia', $this->PeliculasReferencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculasReferencia->create();
			if ($this->PeliculasReferencia->save($this->request->data)) {
				$this->Session->setFlash(__('The peliculas referencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peliculas referencia could not be saved. Please, try again.'));
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
		if (!$this->PeliculasReferencia->exists($id)) {
			throw new NotFoundException(__('Invalid peliculas referencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculasReferencia->save($this->request->data)) {
				$this->Session->setFlash(__('The peliculas referencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peliculas referencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculasReferencia.' . $this->PeliculasReferencia->primaryKey => $id));
			$this->request->data = $this->PeliculasReferencia->find('first', $options);
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
		$this->PeliculasReferencia->id = $id;
		if (!$this->PeliculasReferencia->exists()) {
			throw new NotFoundException(__('Invalid peliculas referencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculasReferencia->delete()) {
			$this->Session->setFlash(__('The peliculas referencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The peliculas referencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
