<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_Catelogy extends CI_Model {
	function get_catelogy($align_title){
		$this->db->where('align_title', $align_title);
		$cat=$this->db->get(PREFIX_DB.'shop_categories')->result();
		$this->db->select('*');
		$this->db->from(PREFIX_DB.'shop');
		$this->db->join(PREFIX_DB.'shop_lang', 'nv92c95_shop.pid=nv92c95_shop_lang.pid', 'left');
		$this->db->where('cid', $cat[0]->cid);
		$data= $this->db->get()->result();
		return $data;
	}



}

/* End of file catelogy.php */
/* Location: ./application/models/catelogy.php */