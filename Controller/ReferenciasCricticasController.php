<?php
App::uses('AppController', 'Controller');
/**
 * ReferenciasCricticas Controller
 *
 * @property ReferenciasCrictica $ReferenciasCrictica
 * @property PaginatorComponent $Paginator
 */
class ReferenciasCricticasController extends AppController {

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
		$this->ReferenciasCrictica->recursive = 0;
		$this->set('referenciasCricticas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReferenciasCrictica->exists($id)) {
			throw new NotFoundException(__('Invalid referencias crictica'));
		}
		$options = array('conditions' => array('ReferenciasCrictica.' . $this->ReferenciasCrictica->primaryKey => $id));
		$this->set('referenciasCrictica', $this->ReferenciasCrictica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReferenciasCrictica->create();
			if ($this->ReferenciasCrictica->save($this->request->data)) {
				$this->Session->setFlash(__('The referencias crictica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referencias crictica could not be saved. Please, try again.'));
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
		if (!$this->ReferenciasCrictica->exists($id)) {
			throw new NotFoundException(__('Invalid referencias crictica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReferenciasCrictica->save($this->request->data)) {
				$this->Session->setFlash(__('The referencias crictica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referencias crictica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReferenciasCrictica.' . $this->ReferenciasCrictica->primaryKey => $id));
			$this->request->data = $this->ReferenciasCrictica->find('first', $options);
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
		$this->ReferenciasCrictica->id = $id;
		if (!$this->ReferenciasCrictica->exists()) {
			throw new NotFoundException(__('Invalid referencias crictica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ReferenciasCrictica->delete()) {
			$this->Session->setFlash(__('The referencias crictica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The referencias crictica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
