<?php
App::uses('AppController', 'Controller');
/**
 * Permisos Controller
 *
 * @property Permiso $Permiso
 * @property PaginatorComponent $Paginator
 */
class PermisosController extends AppController {

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
		$this->Permiso->recursive = 0;
		$this->set('permisos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Permiso->exists($id)) {
			throw new NotFoundException(__('Invalid permiso'));
		}
		$options = array('conditions' => array('Permiso.' . $this->Permiso->primaryKey => $id));
		$this->set('permiso', $this->Permiso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Permiso->create();
			if ($this->Permiso->save($this->request->data)) {
				$this->Session->setFlash(__('The permiso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permiso could not be saved. Please, try again.'));
			}
		}
		$roles = $this->Permiso->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Permiso->exists($id)) {
			throw new NotFoundException(__('Invalid permiso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Permiso->save($this->request->data)) {
				$this->Session->setFlash(__('The permiso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permiso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Permiso.' . $this->Permiso->primaryKey => $id));
			$this->request->data = $this->Permiso->find('first', $options);
		}
		$roles = $this->Permiso->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Permiso->id = $id;
		if (!$this->Permiso->exists()) {
			throw new NotFoundException(__('Invalid permiso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Permiso->delete()) {
			$this->Session->setFlash(__('The permiso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The permiso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
