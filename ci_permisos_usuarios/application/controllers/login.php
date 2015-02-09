<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database('default');
	}
	
	public function index() {
		$datos['nombre_usuario'] = array('name' => 'username', 'placeholder' => 'nombre de usuario');
		$datos['contrasena_usuario'] = array('name' => 'password',	'placeholder' => 'introduce tu password');
		$datos['boton'] = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
		switch ($this->session->userdata('perfil')) {
			case '':
				$datos['sesion_usuario'] = $this->token();
				$datos['titulo'] = 'Login con roles de usuario en CodeIgniter';
				$this->load->view('login_view', $datos);
				break;
			case 'administrador':
				redirect(base_url().'admin');
			break;
				case 'editor':
				redirect(base_url().'editor');
				break;
			case 'suscriptor':
				redirect(base_url().'suscriptor');
				break;
			default:
				$datos['titulo'] = 'Login con roles de usuario en CodeIgniter';
				$this->load->view('login_view', $datos);
			break;
		}
	}
	
	public function iniciar_sesion() {
		if($this->input->post('sesion_usuario') && $this->input->post('sesion_usuario') == $this->session->userdata('sesion_usuario')) {
			$this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
			$this->form_validation->set_rules('password', 'contraseña', 'required|trim|min_length[5]|max_length[150]|xss_clean');
			
			if(!$this->form_validation->run()) {
				$this->index();
			}
			else {
				$nombre_usuario = $this->input->post('username');
				$contrasena_usuario = sha1($this->input->post('password'));
				$usuario = $this->login_model->conectar_usuario($nombre_usuario, $contrasena_usuario);
				if($usuario) {
					$datos_sesion_usuario = array(
						'is_logued_in' 	=> 	TRUE,
						'id_usuario' 	=> 	$usuario->id,
						'perfil'		=>	$usuario->perfil,
						'username' 		=> 	$usuario->username
					);
				$this->session->set_userdata($datos_sesion_usuario);
				$this->index();
				}
			}
		}
		else {
			redirect(base_url().'login');
		}
	}
	
	public function token() {
		$sesion_usuario = md5(uniqid(rand(), TRUE));
		$this->session->set_userdata('sesion_usuario', $sesion_usuario);
		return $sesion_usuario;
	}
	
	public function cerrar_sesion() {
		$this->session->sess_destroy();
		$this->index();
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */