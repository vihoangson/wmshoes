<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller {
	public function index(){
		$this->load->model('Model_Catelogy');
		$data["item"]=$this->Model_Catelogy->get_catelogy($this->uri->segment(2));
		$this->load->view('category', $data);
	}
}

/* End of file category.php */
/* Location: ./application/controllers/category.php */