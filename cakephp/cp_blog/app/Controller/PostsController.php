<?php
class PostsController extends AppController {
	public $helpers = array('Html','Form');
	public $name = 'Posts';
	public $components = array('Session');
	
	function index() {
		$this->set('posts', $this->Post->find('all'));
	}
	
	public function view($id = null) {
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}
	
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Tu post se ha guardado.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Post no válido'));
		}
		
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Post no válido'));
		}
		
		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Tu post se ha actualizado.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('No se puede actualizar tu post.'));
		}
		
		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
	
	function delete($id) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		
		if ($this->Post->delete($id)) {
			$this->Session->setFlash('El post con identificador: ' . $id . ' ha sido eliminado.');
			$this->redirect(array('action' => 'index'));
		}
	}
}
