<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('menu_view');
	}
}

/* End of file menu.php */
/* Location: ./application/controllers/menu.php */