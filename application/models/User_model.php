<?php


/**
 * @package	MODEL
 * @author 	FABIO WILLIAM CONCEIÇÃO
 * @since 	VERSION 1.0.0
 * @filesource
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/**
	* INSERT FUNCTION
	* RETURN IF A ENTRY HAS BEEN INSERTED ON DATABASE
	* 	@access		public
	* 	@param 		array 	$insert
	* 	@return 		int or object database error
	**/	
	public function insert($insert = array()){
		return $this->db->insert('tb_user', $insert);
	}

	/**
	* SELECT ALL RECORDS
	* 
	* 	@access		public
	* 	@return 		int or object database error
	**/	
	public function all(){
		try {

			return array(
				'results'	=> 	$this->db->get('tb_user')->result(),
				'num_rows'	=>	$this->db->get('tb_user')->num_rows(),
			);
			
		} catch (Exception $e) {
			return $e;
		}
	}

	/**
	* SELECT FUNCTION
	* 	@access		public
	* 	@param 		array 	$where
	* 	@return 	array or object database error
	**/	
	public function select($where = array()){
		try {

			return array(
				'results'	=>	$this->db->get_where('tb_user',$where)->result(),
				'num_rows'	=>	$this->db->get_where('tb_user',$where)->num_rows(),
			);
			
		} catch (Exception $e) {
			return $e;
		}
	}

	/**
	* SELECT FUNCTION
	* 	@access		public
	* 	@param 		string 	$query
	* 	@return 	array or object database error
	**/	
	public function custom($query = ''){
		try {

			return array(
				'results'	=>	$this->db->query($query)->get()->result(),
				'num_rows'	=>	$this->db->query($query)->get()->num_rows(),
			);
			
		} catch (Exception $e) {
			return $e;
		}
	}


}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */