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

			
			
		} catch (Exception $e) {
			$this->json->dieJSON($e);
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/ajax/Login.php */