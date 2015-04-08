<?php $this->load->view('_includes/header'); ?>
<?php 
foreach ($articles as $key => $value) {
	echo "<p><h3><a href='".base_url()."article/detail/".$value->align_title."'>".$value->title."</a></h3></p>";	
	//echo 

}
 ?>
<?php $this->load->view('_includes/footer'); ?>