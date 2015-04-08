<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function index(){
	}

	public function save_button_key(){
		print_r($_POST);
	}//END: save_button_key()

	public function delete_img_p(){
		$id=$this->input->post('id');
		if(!$id) return;
		/**
		* option delete ("physical"||"logical")
		* @var string
		**/
		$option="physical";
		$this->db->where('id_image', $id);
		switch($option){
			case "physical":
				if($this->db->delete(PREFIX_DB.'images')){
					echo 1;
				}else{
					echo 0;
				}
			break;
			case "logical":
				$object=array("delete_flag"=>1);
				if($this->db->upload(PREFIX_DB.'images',$object)){
					echo 1;
				}else{
					echo 0;
				}
			break;
		}
	}//END: delete_img_p()
}//END: Class Ajax

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */