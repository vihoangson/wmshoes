<?php $this->load->view('_includes/header'); ?>
	<?php 
		$data["item"]=$item;
		if($item){
			$this->load->view('show_product', $data); 
			?>
			
			<?php
		}else{
			echo '
			<hr>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>WMshoses</strong> Không có sản phẩm ...
			</div>
			';
		}
	?>
<?php $this->load->view('_includes/footer'); ?>