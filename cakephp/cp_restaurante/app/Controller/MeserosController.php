<?php
class MeserosController extends AppController {
	function index() {
		$this->set('meseros', $this->Mesero->find('all'));
	}
}
