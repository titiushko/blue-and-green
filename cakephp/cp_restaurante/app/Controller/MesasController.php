<?php
class MesasController extends AppController {
	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Session');
	
	public function index() {
		$this->set('mesas', $this->Mesa->find('all'));
	}
	
	public function nuevo() {
		if ($this->request->is('post')) {
			
			$this->Mesa->create();
			$mesa = $this->request->data;
		if ($this->Mesa->save($mesa)) {
				$this->Session->setFlash('Se creó mesa '.$mesa['Mesa']['serie'].'.', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash('No se pudo crear el mesa.');
		}
		
		$this->set('meseros', $this->Mesa->Mesero->find('list', array('fields' => array('id', 'nombre_completo'))));
	}
	
	public function editar($id = null) {
		if (!$id) {
			throw new NotFoundException('Datos incorrectos.');
		}
		
		$mesa = $this->Mesa->findById($id);
		if (!$mesa) {
			throw new NotFoundException('Mesa no existe.');
		}
		
		if ($this->request->is(array('post', 'put'))) {
			$this->Mesa->id = $id;
			if ($this->Mesa->save($this->request->data)) {
				$mesa = $this->Mesa->findById($id);
				$this->Session->setFlash('Mesa ' .$mesa['Mesa']['serie'].' actualizada.', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash('No se puede modificar mesa.');
		}
		
		if (!$this->request->data) {
			$this->request->data = $mesa;
		}
		
		$this->set('meseros', $this->Mesa->Mesero->find('list', array('fields' => array('id', 'nombre_completo'))));
	}
	
	function eliminar($id) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException('Incorrecto.');
		}
		
		$mesa = $this->Mesa->findById($id);
		if (!$mesa) {
			throw new NotFoundException('Mesa no existe.');
		}
		
		if ($this->Mesa->delete($id)) {
			$this->Session->setFlash('Mesa ' .$mesa['Mesa']['serie'].' eliminada.', 'default', array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
	}
}
