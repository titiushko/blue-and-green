<?php
App::uses('AppController', 'Controller');
/**
 * Preferencias Controller
 *
 * @property Preferencia $Preferencia
 * @property PaginatorComponent $Paginator
 */
class PreferenciasController extends AppController {

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
		$this->Preferencia->recursive = 0;
		$this->set('preferencias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Preferencia->exists($id)) {
			throw new NotFoundException(__('Invalid preferencia'));
		}
		$options = array('conditions' => array('Preferencia.' . $this->Preferencia->primaryKey => $id));
		$this->set('preferencia', $this->Preferencia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Preferencia->create();
			if ($this->Preferencia->save($this->request->data)) {
				$this->Session->setFlash(__('The preferencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The preferencia could not be saved. Please, try again.'));
			}
		}
		$tiposArticulos = $this->Preferencia->TiposArticulo->find('list');
		$personas = $this->Preferencia->Persona->find('list');
		$this->set(compact('tiposArticulos', 'personas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Preferencia->exists($id)) {
			throw new NotFoundException(__('Invalid preferencia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Preferencia->save($this->request->data)) {
				$this->Session->setFlash(__('The preferencia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The preferencia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Preferencia.' . $this->Preferencia->primaryKey => $id));
			$this->request->data = $this->Preferencia->find('first', $options);
		}
		$tiposArticulos = $this->Preferencia->TiposArticulo->find('list');
		$personas = $this->Preferencia->Persona->find('list');
		$this->set(compact('tiposArticulos', 'personas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Preferencia->id = $id;
		if (!$this->Preferencia->exists()) {
			throw new NotFoundException(__('Invalid preferencia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Preferencia->delete()) {
			$this->Session->setFlash(__('The preferencia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The preferencia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
