<?php
class MeserosController extends AppController {
	public $helpers = array('Html');
	
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
}
