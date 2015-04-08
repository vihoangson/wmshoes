<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_products extends CI_Controller {

	public function index(){
		$per_page=20;
		$this->load->library('pagination');
		$config['base_url']		= '/wmshoes/admin/Admin_products/index/';
		$config['total_rows']	= $this->db->count_all(PREFIX_DB."shop");
		$config['per_page']		= $per_page;
		$config['uri_segment']	= 4;
		$this->pagination->initialize($config);
		$data["pagination"] = $this->pagination->create_links();
		$offset=$this->uri->segment(4);
		$this->db->join(PREFIX_DB.'shop_lang', PREFIX_DB.'shop.pid = '.PREFIX_DB.'shop_lang.pid', 'left');
		$data["item"]=$this->db->get(PREFIX_DB.'shop',$per_page,$offset)->result();
		$this->load->view('admin/admin_products',$data);
	}//END: index()

	public function edit(){
		$pid=$this->uri->segment(4);
		if(!$pid) return false;
		if($this->input->post('submit')=="done"){
			if($this->done_edit($this->input->post())){
				$data["alert_form"] = '<p><span class="label label-success">Saved!</span></p>';
			}else{
				$data["alert_form"] = '<p><span class="label label-danger">Process save had error, please check again!</span></p>';
			}
		}
		$this->db->join(PREFIX_DB.'shop_lang', PREFIX_DB.'shop.pid = '.PREFIX_DB.'shop_lang.pid', 'left');
		$this->db->where(PREFIX_DB.'shop.pid', $pid);
		$item			= $this->db->get(PREFIX_DB.'shop', 1)->result();
		$data["item"]	= $item[0];
		$this->load->view('admin/admin_products_edit',$data);

	}//END: edit()

	private function done_edit($data){
		if($data){
			if($_FILES["images"]["name"][0]){
				$this->load->library('Upload_multiply');
				if($this->upload_multiply->do_multi_upload("images","123444")){
					foreach ($this->upload_multiply->images_saved as $key => $value) {
						$object[]=array(
							"id_image"=>null,
							"image"=>$value["file_name"],
							"pid"=>$data["pid"],
							);
					}//END: foreach
					$this->db->insert_batch(PREFIX_DB.'images', $object);
				}else{
				}//END: If do_multi_upload();
			}//END: upload file images

			//$this->db->where('delete_flag', 0); //Thêm vào database
			$this->db->where('pid', $data["pid"]);
			$images=$this->db->get(PREFIX_DB.'images')->result();
			$i=0;
			foreach ($images as $key => $value) {
				if($value->main_img==1){
					$i++;
				}
			}
			if($i!=1){
				$this->db->where('pid', $data["pid"]);
				$object=array("main_img"=>0);
				$this->db->update(PREFIX_DB.'images', $object);
				$this->db->where('id_image', $images[0]->id_image);
				$this->db->where('pid', $data["pid"]);
				$object=array("main_img"=>1);
				$this->db->update(PREFIX_DB.'images', $object);
			}
			

			$object=array(
				"idcode"=>$data["idcode"],
				"cid"=>$data["cid"],
				"is_home"=>$data["is_home"],
				"is_public"=>$data["is_public"],
				"price_market"=>$data["price_market"],
				"price"=>$data["price"]
				);

			$this->db->where('pid', $data["pid"]);
			if(!$this->db->update(PREFIX_DB.'shop', $object)) return false;
			$object=array(
				"title"=>$data["title"]
				);
			$this->db->where('pid', $data["pid"]);
			$this->db->where('lang_id', 1);
			if(!$this->db->update(PREFIX_DB.'shop_lang', $object)) return false;
			return true;
		}else{
			$this->load->view('errors/html/error_404');
		}
	}//END: done_edit()

}
/* End of file admin_products.php */
/* Location: ./application/controllers/admin/admin_products.php */