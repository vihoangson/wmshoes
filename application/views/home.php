<?php $this->load->view('_includes/header'); ?>
	<?php 
		echo $pagination;
		$data["item"]=$item;
		$this->load->view('show_product', $data); 
		echo $pagination;
	?>
<?php $this->load->view('_includes/footer'); ?>