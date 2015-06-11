<?php
App::uses('AppController', 'Controller');
/**
 * Tiendas Controller
 *
 * @property Tienda $Tienda
 * @property PaginatorComponent $Paginator
 */
class TiendasController extends AppController {

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
		$this->Tienda->recursive = 0;
		$this->set('tiendas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tienda->exists($id)) {
			throw new NotFoundException(__('Invalid tienda'));
		}
		$options = array('conditions' => array('Tienda.' . $this->Tienda->primaryKey => $id));
		$this->set('tienda', $this->Tienda->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tienda->create();
			if ($this->Tienda->save($this->request->data)) {
				$this->Session->setFlash(__('The tienda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tienda could not be saved. Please, try again.'));
			}
		}
		$articulos = $this->Tienda->Articulo->find('list');
		$this->set(compact('articulos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tienda->exists($id)) {
			throw new NotFoundException(__('Invalid tienda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tienda->save($this->request->data)) {
				$this->Session->setFlash(__('The tienda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tienda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tienda.' . $this->Tienda->primaryKey => $id));
			$this->request->data = $this->Tienda->find('first', $options);
		}
		$articulos = $this->Tienda->Articulo->find('list');
		$this->set(compact('articulos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tienda->id = $id;
		if (!$this->Tienda->exists()) {
			throw new NotFoundException(__('Invalid tienda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tienda->delete()) {
			$this->Session->setFlash(__('The tienda has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tienda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
