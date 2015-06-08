<?php
class MeserosController extends AppController {
	public $helpers = array('Html');
	public $components = array('Session');
	
	function index() {
		$this->set('meseros', $this->Mesero->find('all'));
	}
	
	public function ver($id = null) {
		if (!$id) {
			throw new NotFoundException('Datos incorrectos.');
		}
		
		$mesero = $this->Mesero->findById($id);
		if (!$mesero) {
			throw new NotFoundException('Mesero no existe.');
		}
		
		$this->set('mesero', $mesero);
	}
	
	public function nuevo() {
		if ($this->request->is('post')) {
			
			$this->Mesero->create();
			$mesero = $this->request->data;
		if ($this->Mesero->save($mesero)) {
				$this->Session->setFlash('Se creó mesero '.$mesero['Mesero']['nombres'].' '.$mesero['Mesero']['apellidos'].'.', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash('No se pudo crear el mesero.');
		}
	}
}
