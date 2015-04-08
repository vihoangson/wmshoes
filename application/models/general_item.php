<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_item extends CI_Model {
	function save_item(){
		$object=array (
			"name_item"=>"san pham 1",
			);
		$this->db->insert('item', $object);
	}
}

/* End of file general_item.php */
/* Location: ./application/models/general_item.php */
 ?>