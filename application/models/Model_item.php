<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_item extends CI_Model {

	function getProductByAligntitle($align_title){
		$this->db->where('align_title', $align_title);
		$this->db->join(PREFIX_DB.'shop_lang', PREFIX_DB.'shop.pid = '.PREFIX_DB.'shop_lang.pid', 'left');
		$return=$this->db->get(PREFIX_DB.'shop',1)->result();
		if($return){
			return $return;
		}else{
			return false;
		}
	}
	function getAll(){
		$this->db->join(PREFIX_DB.'shop_lang', PREFIX_DB.'shop.pid = '.PREFIX_DB.'shop_lang.pid', 'left');
		$return=$this->db->get(PREFIX_DB.'shop',12)->result();
		if($return){
			return $return;
		}else{
			return false;
		}
	}
}

/* End of file Model_item.php */
/* Location: ./application/models/Model_item.php */