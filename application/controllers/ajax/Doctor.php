<?php

/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {


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


	public function addDoctor()
	{
		$name 	= $this->input->post('name');
		$crm	= $this->input->post('crm');

		return $this->json->dieJSON($this->doctor_model->insert(array('nm_doctor'=>$name,'cd_id_doctor'=>$crm,'ic_active'=>1)));
	}

}

/* End of file Doctor.php */
/* Location: ./application/controllers/ajax/Doctor.php */