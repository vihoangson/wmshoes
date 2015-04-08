<?php $this->load->view('_includes/header'); ?>
<div class="display_product">
	<div class="col_left_p">
		<div class="box_img_p">
			<div class="img_main">
				<img id="img_01" class='main_img'
				src="http://wmshoes.vn/uploads/shop/pic/<?= $item->images?>"
				data-zoom-image="http://wmshoes.vn/uploads/shop/pic/<?= $item->images?>"/>
				<div class="box_zoom">
					<div class="glyphicon glyphicon-zoom-in"></div>
				</div>
			</div>
			<div class="img_sub">
				<ul class="img_sub_ul">
					<li class="active"><a href="#"><img src='http://wmshoes.vn/uploads/shop/pic/<?= $item->images?>'></a></li>
				</ul>
				<div class="tool_sub_img" style="display:none;">
					<span class="glyphicon glyphicon-search"></span> <span class="glyphicon glyphicon-play"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="col_right_p">
		<div class="box_info_p">
			<h2 class="title_product_p">
			<?= $item->title?>
			</h2>
			<hr>
			<div class="price_p">Giá: <b><?= number_format($item->price)?> VNĐ</b></div>
			<div class="box_color">
				<ul class="ul_inline" style="display:none;">
				</ul>
			</div>
			<div class="box_size"  style="display:none;">
				<ul class="ul_inline">
					<li><a class="active" href="#">XS</a></li>
					<li><a href="#">S</a></li>
					<li><a href="#">M</a></li>
					<li><a href="#">L</a></li>
					<li><a href="#">XL</a></li>
					<li><a href="#">XXL</a></li>
					<li><a href="#">XXXL</a></li>
				</ul>
				<span class="size_guide" data-href="http://vus.vn/"> <span class="glyphicon glyphicon-edit"></span>  Bảng size</span>
			</div>
			Simili
			Đế : PU
			<form action="WM_Shoes" method="post" class="form-cart">
				<input type="hidden" name="name" value='Shoping'>
				<input type="hidden" name="op" value='add_basket'>
				<input type="hidden" name="pid" value='74'>
				<input type="hidden" name="soluong" value='1'>
				<input type="hidden" name="size" value='xs'>
				<input type="hidden" name="color" value='red'>
				<table>
					<tr>
						<td>
							Số lượng: <input type='text' name='soluong' id='input-soluong' value='1'>
							<button id="up" type="button"></button><button id="down" type="button"></button>
						</td>
						<td style="text-align:right;">
							<button type="submit" class="add_basket" href="#">THÊM VÀO GIỎ HÀNG</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="info_bottom">
		<div class="box_scroll">
			<div>
			</div>
		</div>
	</div>
	<hr>
	<h4>Sản phẩm cùng loại</h4>
	<div class='other_product' >
		<?php //$this->load->view('other_item'); ?>
		</div><!-- other_product -->
		<div class="clear"></div><p align="right">
		<div class="text-center">
			<ul class="pagination pull-right">
				<li class="active"><a href="#">1</a></li> <li><a href="WM_Shoes?name=Shoping&op=display_product&pid=74&newlang=vietnamese&amp;page=19">2</a></li><li><a href="WM_Shoes?name=Shoping&op=display_product&pid=74&newlang=vietnamese&amp;page=19"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>
		</div>
	</p>
	</div><!-- / display_product -->
	<?php $this->load->view('_includes/footer'); ?>