<div class="row_c">
	<?php
	foreach ($item as $key => $value) {
		?>
		<div class="ele-product">
			<div class="over-img">
				<a href="<?= base_url()  ?>detail/<?= $value->align_title ?>">
					<img src="http://wmshoes.vn/uploads/shop/pic/small_<?= $value->images ?>" class="main_img_ele" rel="<?= $value->pid ?>">
					<img src="http://wmshoes.vn/uploads/shop/pic/small_<?= $value->images ?>" class="sub_img_over" rel="<?= $value->pid ?>" >
				</a>
				<div class='box_img_ele'>
					<a href='WM_Shoes?name=Shoping&op=display_product&pid=<?= $value->pid ?>'>
						<div class='ele_img' rel='<?= $value->pid ?>'  data-url='http://wmshoes.vn/uploads/shop/pic/small_<?= $value->images ?>'></div> 
					</a>
					<?php 
					$this->db->select('image');
					$this->db->where('pid', $value->pid);
					foreach ($this->db->get(PREFIX_DB.'images')->result() as $key_image => $value_image) {
						?> 
						<a href='#'>
							<div class='ele_img' rel='<?= $value->pid ?>'  data-url='http://wmshoes.vn/uploads/shop/pic/small_<?php echo $value_image->image; ?>'></div>
						</a>					
						<?php
					} 
					?>
				</div>
				<div class="clearfix"></div>
			</div><!-- / over-img -->
			<h2>
				<a href="http://wmshoes.vn/WM_Shoes?name=Shoping&op=display_product&pid=<?= $value->pid ?>"><?= $value->title ?></a>
				Giá: <?= number_format($value->price) ?> VND
			</h2>
			<div class='button'>
				<button class='addcart'  data-id='<?= $value->pid ?>'>Thêm vào giỏ</button>
				<a href="http://wmshoes.vn/WM_Shoes?name=Shoping&op=display_product&pid=<?= $value->pid ?>" class='detail-p'>Xem chi tiết</a>
			</div>
		</div><!-- /ele-product -->
		<?php
	}
	?>
</div><!-- row_c -->