<?php
App::uses('AppController', 'Controller');
/**
 * PeliculasGeneros Controller
 *
 * @property PeliculasGenero $PeliculasGenero
 * @property PaginatorComponent $Paginator
 */
class PeliculasGenerosController extends AppController {

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
		$this->PeliculasGenero->recursive = 0;
		$this->set('peliculasGeneros', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PeliculasGenero->exists($id)) {
			throw new NotFoundException(__('Invalid peliculas genero'));
		}
		$options = array('conditions' => array('PeliculasGenero.' . $this->PeliculasGenero->primaryKey => $id));
		$this->set('peliculasGeneros', $this->PeliculasGenero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PeliculasGenero->create();
			if ($this->PeliculasGenero->save($this->request->data)) {
				$this->Session->setFlash(__('The peliculas genero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peliculas genero could not be saved. Please, try again.'));
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
		if (!$this->PeliculasGenero->exists($id)) {
			throw new NotFoundException(__('Invalid peliculas genero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PeliculasGenero->save($this->request->data)) {
				$this->Session->setFlash(__('The peliculas genero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The peliculas genero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PeliculasGeneros.' . $this->PeliculasGenero->primaryKey => $id));
			$this->request->data = $this->PeliculasGenero->find('first', $options);
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
		$this->PeliculasGenero->id = $id;
		if (!$this->PeliculasGenero->exists()) {
			throw new NotFoundException(__('Invalid peliculas genero'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PeliculasGenero->delete()) {
			$this->Session->setFlash(__('The peliculas genero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The peliculas genero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
