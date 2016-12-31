<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->template->view('login/admin/login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */