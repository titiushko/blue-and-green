<?php
App::uses('AppController', 'Controller');
/**
 * Departamentos Controller
 *
 * @property Departamento $Departamento
 * @property PaginatorComponent $Paginator
 */
class DepartamentosController extends AppController {

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
		$this->Departamento->recursive = 0;
		$this->set('departamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Departamento->exists($id)) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		$options = array('conditions' => array('Departamento.' . $this->Departamento->primaryKey => $id));
		$this->set('departamento', $this->Departamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Departamento->create();
			if ($this->Departamento->save($this->request->data)) {
				$this->Session->setFlash(__('The departamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento could not be saved. Please, try again.'));
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
		if (!$this->Departamento->exists($id)) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Departamento->save($this->request->data)) {
				$this->Session->setFlash(__('The departamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The departamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Departamento.' . $this->Departamento->primaryKey => $id));
			$this->request->data = $this->Departamento->find('first', $options);
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
		$this->Departamento->id = $id;
		if (!$this->Departamento->exists()) {
			throw new NotFoundException(__('Invalid departamento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Departamento->delete()) {
			$this->Session->setFlash(__('The departamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The departamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
