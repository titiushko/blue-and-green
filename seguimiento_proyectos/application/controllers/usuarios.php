<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->helper(array('form', 'url', 'html'));
		$this->load->library('form_validation');
		$this->load->model('usuarios_model');
	}
	
	public function index(){
		$datos['usuarios'] = $this->usuarios_model->usuarios();
		$this->load->view('usuarios/consultar_usuarios_view', $datos);
	}
	
	public function agregar(){
		$data['operacion'] = "AGREGAR USUARIO";
		$data['opcion'] = "AGREGAR";
		
		if($this->input->post()){
			
			$this->validaciones();
			
			if($this->form_validation->run() == TRUE){
				$insert_usuario = $this->input->post();
				unset($insert_usuario['btn_guardar'], $insert_usuario['btn_cancelar']);
				
				$codigo_usuario = $this->usuarios_model->agregar($insert_usuario);
				$this->resultado($codigo_usuario);
			}
			else{
				$this->load->view('usuarios/formulario_usuarios_view', $data);
			}
		}
		else{
			$this->load->view('usuarios/formulario_usuarios_view', $data);
		}
	}
	
	public function eliminar($codigo_usuario = NULL){
		$data['operacion'] = "ELIMINAR USUARIO";
		$data['opcion'] = "ELIMINAR";
		
		if ($this->input->post('estado') == '1'){
			echo "eliminar registro";
			$delete_usuario = $this->input->post('codigo_usuario');
			$this->usuarios_model->eliminar($delete_usuario);
			redirect('usuarios');
		}
		else{
			$data['usuario'] = $this->usuarios_model->usuario($codigo_usuario);
			if(empty($data['usuario'])){
				echo 'ID Invalido';
			}
			else{
				$this->load->view('usuarios/formulario_usuarios_view', $data);
			}
		}
	}
	
	public function modificar($codigo_usuario = NULL){
		$data['operacion'] = "MODIFICAR USUARIO";
		$data['opcion'] = "ACTUALIZAR";
	
		if ($this->input->post('estado') == '1'){
			$update_usuario = $this->input->post('codigo_usuario');
			$this->usuarios_model->modificar($update_usuario);
			redirect('usuarios');
		}
		else{
			$data['usuario'] = $this->usuarios_model->usuario($codigo_usuario);
			if(empty($data['usuario'])){
				echo 'ID Invalido';
			}
			else{
				$this->load->view('usuarios/formulario_usuarios_view', $data);
			}
		}
	}
	
	public function resultado($codigo_usuario = NULL){
		$this->load->view('usuarios/resultado_usuarios_view');
	}
	
	public function validaciones(){
		$reglas = array(
			array(
				'field' => 'codigo_usuario',
				'label' => 'Codigo',
				'rules' => 'trim|required|min_length[6]' 
			),
			array(
				'field' => 'nombres_usuario',
				'label' => 'Nombres',
				'rules' => 'trim|required' 
			),
			array(
				'field' => 'apellidos_usuario',
				'label' => 'Apellidos',
				'rules' => 'trim|required' 
			),
			array(
				'field' => 'nacimiento_usuario',
				'label' => 'Fecha de Nacimiento',
				'rules' => 'trim' 
			),
			array(
				'field' => 'password_usuario',
				'label' => 'Contraseña',
				'rules' => 'trim|required|min_length[6]' 
			)
		);
		
		$this->form_validation->set_rules($reglas);
		
		/*$this->form_validation->set_message('required','El Campo: %s, Es Obligatorio');
		$this->form_validation->set_message('min_length','El Campo: %s, Debe tener al Menos %s Caracteres');*/
	}
}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */