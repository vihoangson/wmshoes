<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload_multiply extends CI_Upload {
	/**
	 * variable contain result after upload
	 *
	 * @var array
	 **/
	public $images_saved=array();
	protected	$ci;

	public function __construct(){
		$this->ci =& get_instance();
	}
	public function do_multi_upload($name_input_file="userfile",$prefix_file=""){
		if (!empty($_FILES[$name_input_file]['name'][0])) {
			if ($this->upload_files($prefix_file, $_FILES[$name_input_file]) === FALSE) {
				echo $this->ci->upload->display_errors('<div class="alert alert-danger">', '</div>');
				$data['error'] = $this->ci->upload->display_errors('<div class="alert alert-danger">', '</div>');
				return false;
			}
		}
		return true;
	}

	private function upload_files($title="", $files){
		$config = array(
			'upload_path'   => './public/tmp/',
			'allowed_types' => 'jpg|gif|png',
			'overwrite'     => 1,
			);
		$this->ci->load->library('upload', $config);
		$this->images_saved=array();//clear variable
		foreach ($files['name'] as $key => $image) {
			$_FILES['images']['name']= $files['name'][$key];
			$_FILES['images']['type']= $files['type'][$key];
			$_FILES['images']['tmp_name']= $files['tmp_name'][$key];
			$_FILES['images']['error']= $files['error'][$key];
			$_FILES['images']['size']= $files['size'][$key];
			$exp="";
			switch($files['type'][$key]){
				case "image/jpeg":
					$exp="jpg";
				break;
				case "image/png":
					$exp="png";
				break;
				case "image/gif":
					$exp="gif";
				break;
			}
			if(!$exp) return false;
			if($title){
				$config['file_name'] = $title."_".$image;
			}else{
				$config['file_name'] = $image;
			}
			$this->ci->upload->initialize($config);
			if ($this->ci->upload->do_upload("images")) {
				$this->images_saved[]=$config;
				$this->ci->upload->data();
			} else {
				return false;
			}
		}
		return true;
	}
}
/* End of file My_upload.php */
/* Location: ./application/libraries/My_upload.php */
