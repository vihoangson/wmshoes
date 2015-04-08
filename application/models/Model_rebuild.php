<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Rebuild align title for product + category
 *
 * @author Santo
 *
 **/
class Model_rebuild extends CI_Model {
	function init(){
		$this->re_insert_align_title_stories();
		$this->re_insert_align_title_product();
		$this->re_insert_align_title_category();
	}
	function re_insert_align_title_stories(){
		$this->db->select("*");
		$this->db->from(PREFIX_DB.'stories');
		$data1= $this->db->get()->result();
		foreach ($data1 as $key => $value) {
			$object=array(
				"align_title"=>mod_rewrite($value->title)
				);
			$this->db->where('sid', $value->sid);
			$this->db->update(PREFIX_DB.'stories', $object);
		}
	}
	function re_insert_align_title_product(){
		$this->db->select("*");
		$this->db->from(PREFIX_DB.'shop');
		$this->db->join(PREFIX_DB.'shop_lang', PREFIX_DB.'shop.pid='.PREFIX_DB.'shop_lang.pid', 'left');
		$this->db->where('lang_id', 1);
		$data1= $this->db->get()->result();
		foreach ($data1 as $key => $value) {
			$object=array(
				"align_title"=>mod_rewrite($value->title)
				);
			$this->db->where('pid', $value->pid);
			$this->db->update(PREFIX_DB.'shop', $object);
		}
	}
	function re_insert_align_title_category(){
		$this->db->select("*");
		$this->db->from(PREFIX_DB.'shop_categories');
		$this->db->join(PREFIX_DB.'shop_categories_lang', PREFIX_DB.'shop_categories.cid='.PREFIX_DB.'shop_categories_lang.cid', 'left');
		$this->db->where('lang_id', 1);
		$data1= $this->db->get()->result();
		foreach ($data1 as $key => $value) {
			$object=array(
				"align_title"=>mod_rewrite($value->title)
				);
			$this->db->where('cid', $value->cid);
			$this->db->update(PREFIX_DB.'shop_categories', $object);
		}
	}

}

/* End of file Model_rebuild.php */
/* Location: ./application/models/Model_rebuild.php */