<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item extends CI_Controller {

	public function index()
	{
			
	}
	function detail(){
		$align_title=$this->uri->segment(2);
		$this->load->model('Model_item');
		$data["item"]=$this->Model_item->getProductByAligntitle($align_title)[0];
		$this->load->view('detail_item',$data);
	}
	function show_all(){
		$this->load->model('Model_item');
		$data["item"]=$this->Model_item->getAll();	
		$this->load->view('show_all',$data);
	}


}

/* End of file item.php */
/* Location: ./application/controllers/item.php */