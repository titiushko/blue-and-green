<?php
App::uses('AppController', 'Controller');
/**
 * Articulos Controller
 *
 * @property Articulo $Articulo
 * @property PaginatorComponent $Paginator
 */
class ArticulosController extends AppController {

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
		$this->Articulo->recursive = 0;
		$this->set('articulos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Articulo->exists($id)) {
			throw new NotFoundException(__('Invalid articulo'));
		}
		$options = array('conditions' => array('Articulo.' . $this->Articulo->primaryKey => $id));
		$this->set('articulo', $this->Articulo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Articulo->create();
			if ($this->Articulo->save($this->request->data)) {
				$this->Session->setFlash(__('The articulo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articulo could not be saved. Please, try again.'));
			}
		}
		$tiposArticulos = $this->Articulo->TiposArticulo->find('list');
		$tiendas = $this->Articulo->Tienda->find('list');
		$pedidos = $this->Articulo->Pedido->find('list');
		$this->set(compact('tiposArticulos', 'tiendas', 'pedidos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Articulo->exists($id)) {
			throw new NotFoundException(__('Invalid articulo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Articulo->save($this->request->data)) {
				$this->Session->setFlash(__('The articulo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The articulo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Articulo.' . $this->Articulo->primaryKey => $id));
			$this->request->data = $this->Articulo->find('first', $options);
		}
		$tiposArticulos = $this->Articulo->TiposArticulo->find('list');
		$tiendas = $this->Articulo->Tienda->find('list');
		$pedidos = $this->Articulo->Pedido->find('list');
		$this->set(compact('tiposArticulos', 'tiendas', 'pedidos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Articulo->id = $id;
		if (!$this->Articulo->exists()) {
			throw new NotFoundException(__('Invalid articulo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Articulo->delete()) {
			$this->Session->setFlash(__('The articulo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The articulo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
