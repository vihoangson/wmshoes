$(document).ready(function() {
					//  =========   ajaxForm   =========  //
					$('#form_email').ajaxForm(function() {
						show_dialog("Email cá»§a báº¡n Ä‘Ã£ Ä‘Æ°á»£c lÆ°u");
						$("#subscribe_box").html($("input[name='email']").val());
					});
					$('#form_lienhe').ajaxForm(function() {
						show_dialog("Form Ä‘Ã£ Ä‘Æ°á»£c gá»­i");
						window.location.href = '/';
					});
					//  =========   end ajaxForm   =========  //
	//  =========   elevatezoom chi tiáº¿t sáº£n pháº©m   =========  //
		$('.main_img').elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active'});
	//  =========  END elevatezoom chi tiáº¿t sáº£n pháº©m   =========  //


	//  =========   Thanh toÃ¡n payment   =========  //
		$("input[name='method_payment']").change(function(event) {
			/* Act on the event */
			value_select=parseInt($(this).val());
			switch(value_select){
				case 1:
					$(".box_banks").fadeIn(300);
				break;
				default:
					$(".box_banks").hide();
				break;
			}
		});
	//  =========  END Thanh toÃ¡n payment   =========  //


	$(".ele_img").mouseover(function(event) {
		id=$(this).attr("rel");
		src=$(this).data("url");

		$(".sub_img_over[rel='"+id+"']").fadeIn(0, function() {
			$(this).attr({"src":src});
		});
	});
	$(".ele_img").click(function(event) {

	});

	$(".box_img_ele").mouseout(function(event) {
		// $(".sub_img_over").fadeOut('0', function() {

		// });
	});

	$(".img_main img").fancybox({
		afterClose   : function(){
			$(".img_main img").css({"display":"block"});
		}  // After closing
	});
	checkshopcart();
	function checkshopcart(){
		$.post('modules.php',{name:"Shoping",op:"do_ajax",case:"check_shopcart"}, function(data, textStatus, xhr) {

			//$(".box_shopcart  > div").html(data);
			// if($(".box_shopcart ul li").length>0)
			// 	$(".favorite_button").html("Favorite ("+$(".box_favorite ul li").length+")");
			// else
			// 	$(".favorite_button").html("Favorite");
		});
	}
	$("#up").click(function(event) {
		if(parseInt($("#input-soluong").val())>1)
			$("#input-soluong").val(parseInt($("#input-soluong").val())-1);
	});
	$("#down").click(function(event) {
		$("#input-soluong").val(parseInt($("#input-soluong").val())+1);

	});
	$(".img_sub_ul a").click(function(event) {
		return false;
	});
	$(".img_sub_ul img").click(function(event) {
		$(".img_sub_ul li").removeClass('active');
		$(this).parent("a").parent("li").addClass('active');
		src_x= $(this).attr("src");
		$(".img_main img").attr("src",src_x);
		$(".img_main img").data("zoom-image",src_x);
		$(".zoomWindow").css({"background-image":"url("+src_x+")"});
	});



	$(".m_menu").click(function(event) {

	});
	$(".nivo_silder").nivoSlider({
		pauseTime:8000
	});

	$(".silde-content").jCarouselLite({
				btnNext: ".next-btn",
				btnPrev: ".prev-btn",
		visible: 4,
		auto:null,
	});
	$(".addcart").click(function(event) {
		/* Act on the event */
		var id_cat=parseInt($(this).data("id"));
		$.post('modules.php', {name:"Shoping",op:"add_basket",pid:id_cat,soluong:1}, function(data, textStatus, xhr) {
			show_dialog("ÄÃ£ thÃªm vÃ o giá» hÃ ng");
			checkshopcart();
		});
	});
	function show_dialog(mes){
		if(!$(".dialog_jquery").width())
			$("body").append('<div class="dialog_jquery"></div>');
		$(".dialog_jquery").text(mes);
		$(".dialog_jquery").fadeIn(200).delay(1000).fadeOut(200);
		var width_b=$(window).width()/2 - ($(".dialog_jquery").width()/2);
		$(".dialog_jquery").css({top:"10px",left:width_b+"px"});
	}

	$('.jcar').each(function() {
			$(this).jCarouselLite({
		auto:null,
		visible: 4,
		btnNext:  ".next_"+$(this).data("id")
			});
		}); //- See more at: http://myintarweb.com/dispatch/multiple-jcarouselite#sthash.qTgcTLWz.dpuf
});