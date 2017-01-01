<?php


/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	*
	*	@access 	public
	*
	*	@return 	class constructor
	*
	*
	**/
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if (!$this->session->userdata()) {
			redirect('admin/login','refresh');
		}
	}


	public function index()
	{
		$this->template->header("ADMIN - USERS",'admin/template/header',"admin", "", "", "","",'nav-md');
		$this->template->menu('','admin/template/menu','','','','',array()
			,'',
			array(
				'index'		=>'',
				'products' 	=> ''
			)
		);
		$this->template->view('admin/users/index',array('users'=>$this->user_model->all()));
		$this->template->footer('','admin/template/footer','user','user');
	}

	public function newUser(){
		$this->template->header("ADMIN - USERS",'admin/template/header',"admin", "", "", "","",'nav-md');
		$this->template->menu('','admin/template/menu','','','','',array()
			,'',
			array(
				'index'		=>'',
				'products' 	=> ''
			)
		);
		$this->template->view('admin/users/new');
		$this->template->footer('','admin/template/footer','user','user');
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */