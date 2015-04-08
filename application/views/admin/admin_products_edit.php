<?php $this->load->view('admin/_includes/header.php');?>
<?php
	// [pid] => 37
	// [cid] => 0
	// [man_id] => 1
	// [price] => 600000
	// [images] => WM_004.jpg
	// [date] => 1420435688
	// [is_home] => 0
	// [is_public] => 0
	// [price_market] => 0
	// [idcode] => WM_004
	// [tags] =>
	// [color] =>
	// [size] =>
	//
	// [title] =>
	// [hometext] =>
	// [bodytext] =>
	// [picturetext] =>
	// [videotext] =>
	// [storytext] =>
?>
	<legend>Chỉnh sửa thông tin sản phẩm</legend>
<form action="" method="POST" class="" role="form" enctype='multipart/form-data' >
	<input type="hidden" name="pid" id="inputPid" class="form-control" value="<?php echo $item->pid; ?>">
	<div class="form-group">
		<label class="" for="">Tên sản phẩm</label>
		<input type="text" value="<?php echo $item->title ?>" class="form-control" id="" placeholder="Input field" name="title">
	</div>
	<div class="form-group">
		<label class="" for="">Nhóm sản phẩm</label>
		<input type="text" value="<?php echo $item->cid ?>" class="form-control" id="" placeholder="Input field" name="cid">
	</div>
	<div class="form-group">
		<label class="" for="">Hiện trang chủ</label>
		<input type="radio" name="is_home" value="1" <?= (intval($item->is_home) ==1?"checked":"") ?>> Có  <input type="radio" name="is_home" value="0"<?= (intval($item->is_home) == 0?"checked":"") ?>> Không
	</div>
	<div class="form-group">
		<label class="" for="">Kích hoạt</label>
		<input type="radio" name="is_public" value="1" <?= (intval($item->is_public) == 1?"checked":"") ?>> Có  <input type="radio" name="is_public" value="0" <?= (intval($item->is_public) == 0?"checked":"") ?>> Không
	</div>
	<div class="form-group">
		<label class="" for="">Giá</label>
		<input type="text" value="<?php echo $item->price ?>" class="form-control" id="" placeholder="Input field" name="price">
	</div>
	<div class="form-group">
		<label class="" for="">Giá khuyến mãi</label>
		<input type="text" value="<?php echo $item->price_market ?>" class="form-control" id="" placeholder="Input field" name="price_market">
	</div>
	<div class="form-group">
		<label class="" for="">Hình ảnh sản phầm</label>
		<input type="file" class="form-control"  name="images[]" multiple>
	</div>
	<div id="img_border">
		<?php
		
		$this->db->where('pid', $item->pid);
		$images=$this->db->get(PREFIX_DB.'images')->result();
		$flag_create_img=true;
		foreach ($images as $key => $value) {
			echo "

			<div class='ele_img ".($value->main_img==1?"main_img":"")."' data-id='".$value->id_image."'>
				"."<img src='/wmshoes/public/tmp/".$value->image."'>".' 
				<p>
					<span class="glyphicon glyphicon-trash delete_img_p" data-id='.$value->id_image.'></span>
					<span class="glyphicon glyphicon-star set_main_img_p" data-id='.$value->id_image.'></span>
				</p>
				'."
			</div>

			";
		}
		?>
	</div>
	<div class="clearfix"></div>
	<div class="form-group">
		<label class="" for="">Mã sản phẩm</label>
		<input type="text" value="<?php echo $item->idcode ?>" class="form-control" id="" placeholder="Input field" name="idcode">
	</div>

	<button type="submit" class="btn btn-primary" name="submit" value="done">Submit</button>
</form>
<?php $this->load->view('admin/_includes/footer.php'); ?>
