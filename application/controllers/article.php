<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

	public function catelogy()
	{
		$this->load->model('Model_rebuild');
		$this->db->where(PREFIX_DB.'stories.align_title', $this->uri->segment(3));
		$this->db->join(PREFIX_DB.'stories_cat', PREFIX_DB.'stories_cat.catid = '.PREFIX_DB.'stories.catid', 'left');
		$data["articles"]=$this->db->get(PREFIX_DB.'stories', 10)->result();
		$this->load->view('article_catelogy', $data);
	}
	public function detail(){
		$align_title=$this->uri->segment(3);
		$this->db->where('align_title', $align_title);
		$data["article"]=$this->db->get(PREFIX_DB.'stories',1)->result();
		$this->load->view('article_detail', $data);		
	}

}

/* End of file article.php */
/* Location: ./application/controllers/article.php */