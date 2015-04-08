<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * undocumented function
 *
 * @return void
 * @author 
 **/
class Home extends CI_Controller {	
	public function __construct(){
		parent::__construct(); 
		$this->load->library('pagination');
		//$this->load->model('Model_item');
	}

	public function index(){
		$this->db->select('*, '.PREFIX_DB.'shop.pid as s_pid');		
		$this->db->join(PREFIX_DB.'shop_lang', PREFIX_DB.'shop_lang.pid = '.PREFIX_DB.'shop.pid', 'left');
		$this->db->order_by(PREFIX_DB.'shop.pid', 'desc');
		$offset=$this->uri->segment(2);
		$data["item"] = $this->db->get(PREFIX_DB."shop",$this->config->item("per_page"),$offset)->result();
		$config['base_url'] = '/wmshoes/home/';
		$config['total_rows'] = $this->db->count_all(PREFIX_DB.'shop');
		$config['per_page'] = $this->config->item("per_page");
		$config['uri_segment'] = 2;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<div>';
		$config['last_tag_close'] = '</div>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<div>';
		$config['next_tag_close'] = '</div>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<div>';
		$config['prev_tag_close'] = '</div>';
		$config['cur_tag_open'] = '<b>';
		$config['cur_tag_close'] = '</b>';
		$this->pagination->initialize($config);
		
		$data["pagination"]= "
		<div class='pagination_box'>
			".$this->pagination->create_links()."
		</div>
		<div class='clearfix'></div>
		";		
		$this->load->view('home',$data);
	}
}
/* End of file home.php */
/* Location: ./application/controllers/home.php */