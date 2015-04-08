<?php
$this->load->view('admin/_includes/header.php');
?>
<div class="pagination-box"><?php echo $pagination; ?></div>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Giá tiền</th>
			<th>Giá khuyến mãi</th>
			<th>Mã sp</th>
			<th>Ngày đăng sp</th>
			<th>Size</th>
			<th>Color</th>
			<th>Public</th>
			<th>Home</th>
			<th>Lượt xem</th>
			<th>Chỉnh sửa</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($item as $key => $value) {
			?>
			<tr>
				<td><?php echo $value->pid; ?></td>
				<td><?php echo $value->title; ?></td>
				<td><?php echo $value->price; ?></td>
				<td><?php echo $value->price_market; ?></td>
				<td><?php echo $value->idcode; ?></td>
				<td><?php echo date("d/m/y",$value->date); ?></td>
				<td><?php echo $value->size; ?></td>
				<td><?php echo $value->color; ?></td>
				<td><?php echo $value->is_public; ?></td>
				<td><?php echo $value->is_home; ?></td>
				<td><?php echo $value->counter; ?></td>
				<td>
					<p><a href="/wmshoes/admin/Admin_products/edit/<?php echo $value->pid; ?>"><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa</a></p>
					<p><a href="#"><span class="glyphicon glyphicon-trash"></span> Xóa</a></p>
				</td>
			</tr>
			<?php
		}
		?>
		</tbody>
	</table>
	<div class="pagination-box"><?php echo $pagination; ?></div>
	<?php
$this->load->view('admin/_includes/footer.php');
?>
