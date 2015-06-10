<?php
App::uses('AppController', 'Controller');
/**
 * TiposArticulos Controller
 *
 * @property TiposArticulo $TiposArticulo
 * @property PaginatorComponent $Paginator
 */
class TiposArticulosController extends AppController {

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
		$this->TiposArticulo->recursive = 0;
		$this->set('tiposArticulos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TiposArticulo->exists($id)) {
			throw new NotFoundException(__('Invalid tipos articulo'));
		}
		$options = array('conditions' => array('TiposArticulo.' . $this->TiposArticulo->primaryKey => $id));
		$this->set('tiposArticulo', $this->TiposArticulo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TiposArticulo->create();
			if ($this->TiposArticulo->save($this->request->data)) {
				$this->Session->setFlash(__('The tipos articulo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipos articulo could not be saved. Please, try again.'));
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
		if (!$this->TiposArticulo->exists($id)) {
			throw new NotFoundException(__('Invalid tipos articulo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TiposArticulo->save($this->request->data)) {
				$this->Session->setFlash(__('The tipos articulo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipos articulo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TiposArticulo.' . $this->TiposArticulo->primaryKey => $id));
			$this->request->data = $this->TiposArticulo->find('first', $options);
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
		$this->TiposArticulo->id = $id;
		if (!$this->TiposArticulo->exists()) {
			throw new NotFoundException(__('Invalid tipos articulo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TiposArticulo->delete()) {
			$this->Session->setFlash(__('The tipos articulo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipos articulo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
