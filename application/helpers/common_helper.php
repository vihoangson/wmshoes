<?php 
/**
 * Build menu type ui>li 
 * @param array array() has parent_id
 * @param $option has key "class_main","class_child"
 * @return string
 * @author Santo
 **/
function get_menu($array,$child=FALSE,$option=array()){
	$str="";
	$str .= "<ul ".(isset($option["class_main"])?" class='".$option["class_main"]."'" :"").">";
	foreach ($array as $key => $value) {
		if($value->parentid==0){
			$str.= "<li><a href='".base_url()."category/".($value->align_title)."'>".$value->title."</a>";
			$m="";
			foreach ($array as $key2 => $value2) {
				if($value2->parentid==$value->cid){
					$m.= "<li><a href='".base_url()."category/".($value2->align_title)."'>".$value2->title."</a></li>";
				}
			}
			if($m!=""){
				$str .= "<ul ".(isset($option["class_child"])?" class='".$option["class_child"]."'" :"").">".$m."</ul>";
			}
			$str.="</li>";
		}
	}
	$str .= "<ul>";
	return $str;
}//get_menu

/**
 * Gắn tạm lang id
 *
 * @return int
 * @author Santo
 **/
function get_lang(){
	return 1;
}//get_lang

/**
 * delete_null_title_product()
 *
 * @return void
 * @author Santo
 **/
function delete_null_title_product($data){
	$CI =& get_instance();
	foreach ($data as $key => $value) {
		if($value->title==""){
			$CI->db->where(PREFIX_DB.'shop.pid', $value->pid);
			$CI->db->delete(PREFIX_DB.'shop');
			echo $CI->db->last_query();
			echo "<hr>";
		}
	}	
}//delete_null_title_product

/**
 * Old function of wmshoes
 *
 * @return void
 * @author Santo
 * Will delete
 **/
function ele_product_1($value){
	global $site_live,$db,$prefix,$cur,$config__pre_img;
	?>
	<div class="ele-product">
		<div class="over-img">
			<?php echo '
			<a href="modules.php?name=Shoping&op=display_product&pid='.$value["pid"].'">
				<img src="uploads/shop/pic/'.$config__pre_img.''.$value["images"].'" class="main_img_ele" rel="'.$value["pid"].'">

				'; ?>
				<img src="" class="sub_img_over" rel="<?php echo $value["pid"] ?>" >
			</a>
			<div class='box_img_ele'>


				<?php 
				echo "<a href='modules.php?name=Shoping&op=display_product&pid=".$value["pid"]."'>
				<div class='ele_img' rel='".$value["pid"]."'  data-url='uploads/shop/pic/".$config__pre_img."".$value["images"]."'></div> </a>";

				$sql2="select * from ".$prefix."_images where pid=".$value["pid"]."  ";
				$rs2=$db->sql_query($sql2);		
				while ($row2 = $db->sql_fetchrow($rs2)) {
					echo "<a href='modules.php?name=Shoping&op=display_product&pid=".$value["pid"]."'><div class='ele_img' rel='".$value["pid"]."'  data-url='uploads/shop/pic/".$config__pre_img."".$row2["image"]."'></div> </a>";
				}

				?>
			</div>
			<div class="clearfix"></div>

		</div>
		<h2><?php echo '<a href="modules.php?name=Shoping&op=display_product&pid='.$value["pid"].'">
			'.$value["title"].'</a>'; ?> Giá: <?php echo ''.format_price($value["price"])." ".$cur.''; ?></h2>
			
			<div class='button'>
				<button class='addcart'  data-id='<?php echo $value["pid"]; ?>'>Thêm vào giỏ</button>
				<a href="<?php echo 'modules.php?name=Shoping&op=display_product&pid='.$value["pid"].''; ?>" class='detail-p'>Xem chi tiết</a>
			</div>
		</div>							
		<?php							
}//ele_product_1

?>