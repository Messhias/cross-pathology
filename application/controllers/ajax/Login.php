<?php


/**
 * @package	CONTROLLER
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		try {

			
			$this->session->set_userdata( $this->user_model->select(
						array(
							'nm_user'	=>	$this->input->post('username'),
							'ds_pass'	=>	$this->input->post('pass'),
							'ic_active'	=>	1,
						)
					) 
			);

			return $this->json->dieJSON(
				array(
					'results'	=>	$this->user_model->select(
						array(
							'nm_user'	=>	$this->input->post('username'),
							'ds_pass'	=>	$this->input->post('pass'),
							'ic_active'	=>	1,
						)
					)
				)
			);
			
		} catch (Exception $e) {
			$this->json->dieJSON($e);
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/ajax/Login.php */