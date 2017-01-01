<?php


/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/


defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {

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

	/**
	* FUNCTION INDEX
	* @return view
	**/
	public function index()
	{
		$this->template->header("ADMIN - DASHBOARD",'admin/template/header',"admin", "", "", "","",'nav-md');
		$this->template->menu('','admin/template/menu','','','','',array()
			,'',
			array(
				'index'		=>'',
				'products' 	=> ''
			)
		);
		
		$this->template->view('admin/doctor/index',array(
				'doctors' 	=>	$this->doctor_model->all()
			)
		);
		$this->template->footer('','admin/template/footer','','');
	}


	/**
	* FUNCTION INDEX
	* @return view
	**/
	public function newDoctor(){

		$this->template->header("ADMIN - NEW DOCTOR",'admin/template/header',"admin", "", "", "","",'nav-md');
		$this->template->menu('','admin/template/menu','','','','',array()
			,'',
			array(
				'index'		=>'',
				'products' 	=> ''
			)
		);
		
		$this->template->view('admin/doctor/new');
		$this->template->footer('','admin/template/footer','doctor','doctor');
	}

}

/* End of file Doctor.php */
/* Location: ./application/controllers/admin/Doctor.php */