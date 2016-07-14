<?php
App::uses('AppController', 'Controller');
/**
 * PeliculasTematicas Controller
 *
 * @property PeliculasTematica $PeliculasTematica
 * @property PaginatorComponent $Paginator
 */
class PeliculasTematicasController extends AppController {

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
		$this->PeliculasTematica->recursive = 0;
		$this->set('peliculasTematicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculasTematica->exists($id)) {
			throw new NotFoundException(__('Invalid peliculas tematica'));
		}
		$options = array('conditions' => array('PeliculasTematica.' . $this->PeliculasTematica->primaryKey => $id));
		$this->set('peliculasTematica', $this->PeliculasTematica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculasTematica->create();
			if ($this->PeliculasTematica->save($this->request->data)) {
				$this->Session->setFlash(__('The peliculas tematica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peliculas tematica could not be saved. Please, try again.'));
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
		if (!$this->PeliculasTematica->exists($id)) {
			throw new NotFoundException(__('Invalid peliculas tematica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculasTematica->save($this->request->data)) {
				$this->Session->setFlash(__('The peliculas tematica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peliculas tematica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculasTematica.' . $this->PeliculasTematica->primaryKey => $id));
			$this->request->data = $this->PeliculasTematica->find('first', $options);
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
		$this->PeliculasTematica->id = $id;
		if (!$this->PeliculasTematica->exists()) {
			throw new NotFoundException(__('Invalid peliculas tematica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculasTematica->delete()) {
			$this->Session->setFlash(__('The peliculas tematica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The peliculas tematica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
