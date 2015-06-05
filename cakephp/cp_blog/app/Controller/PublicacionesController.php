<?php
class PublicacionesController extends AppController {
	public $name = 'Publicaciones';
	public $helpers = array('Html','Form');
	public $components = array('Session');
	var $uses = array('Publicacion');
	
	function index() {
		$this->set('publicaciones', $this->Publicacion->find('all'));
	}
	
	public function ver($id_publicacion = null) {
		$this->Publicacion->id_publicacion = $id_publicacion;
		$this->set('publicacion', $this->Publicacion->read());
	}
	
	public function agregar() {
		if ($this->request->is('post')) {
			if ($this->Publicacion->save($this->request->data)) {
				$this->Session->setFlash('Publicación se ha guardado.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	public function editar($id_publicacion = null) {
		if (!$id_publicacion) {
			throw new NotFoundException(__('Publicación no válido'));
		}
		
		$post = $this->Publicacion->findById($id_publicacion);
		if (!$post) {
			throw new NotFoundException(__('Publicación no válido'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			$this->Publicacion->id_publicacion = $id_publicacion;
			if ($this->Publicacion->save($this->request->data)) {
				$this->Session->setFlash(__('Publicación se ha actualizado.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('No se puede actualizar publicación.'));
		}
		
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
	
	function eliminar($id_publicacion) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		
		if ($this->Publicacion->delete($id_publicacion)) {
			$this->Session->setFlash('Publicación con identificador: ' . $id_publicacion . ' ha sido eliminado.');
			$this->redirect(array('action' => 'index'));
		}
	}
}
