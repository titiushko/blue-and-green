<?php
App::uses('AppController', 'Controller');
/**
 * Municipios Controller
 *
 * @property Municipio $Municipio
 * @property PaginatorComponent $Paginator
 */
class MunicipiosController extends AppController {

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
		$this->Municipio->recursive = 0;
		$this->set('municipios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
		$this->set('municipio', $this->Municipio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Municipio->create();
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		}
		$departamentos = $this->Municipio->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Municipio->exists($id)) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Municipio->save($this->request->data)) {
				$this->Session->setFlash(__('The municipio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The municipio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Municipio.' . $this->Municipio->primaryKey => $id));
			$this->request->data = $this->Municipio->find('first', $options);
		}
		$departamentos = $this->Municipio->Departamento->find('list');
		$this->set(compact('departamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Municipio->id = $id;
		if (!$this->Municipio->exists()) {
			throw new NotFoundException(__('Invalid municipio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Municipio->delete()) {
			$this->Session->setFlash(__('The municipio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The municipio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
