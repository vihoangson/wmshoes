			</div><!-- content-page-all -->
			<div class="clearfix"></div>
		</div>	<!-- body-page -->
		<div class="banner-bottom">
			<a href="#"><img src="http://livedemo00.template-help.com/virtuemart_33815/images/banners/banner3.jpg"></a>
			<a href="#"><img src="http://livedemo00.template-help.com/virtuemart_33815/images/banners/banner4.jpg"></a>
		</div><!-- banner-bottom -->

		<div class="footer-box">
			<div class="content-footer">
				<p>Copyright © 2014 <a href='http://wmshoes.vn/'>W&M Shoes</a></p>
				<p>Địa chỉ: 2A đường Phan Văn Trị, quận Gò Vấp, Tp.HCM</p>
				<p>Hotline: 0121.5607.002</p>
			</div>
			<div class="sub_menu">
				<ul>
					<li><a href="WMShoes">Trang chủ</a></li>
					<li><a href="WM_Shoes?name=Whoweare">Giới thiệu</a></li>
					<li><a href="WM_Shoes?name=Shoping">Sản phẩm</a></li>
					<li><a href="WM_Shoes?name=Whoweare">Hướng dẫn mua hàng</a></li>
					<li><a href="WM_Shoes?name=Contactus">Liên hệ</a></li>
				</ul>
			</div><!-- sub_menu -->
		</div><!-- footer-box -->
	</div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58442244-1', 'auto');
  ga('send', 'pageview');

</script>
		<script type="text/javascript" src="http://wmshoes.vn/script/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="http://wmshoes.vn/script/jquery.form/jquery.form.js"></script>
		<?php
		if(ENVIRONMENT!="production"){//development, testing , production
			$this->load->view('debug/bind_key_debug'); 
		}
		?>
		<!-- <script src="http://lam.cty.vn/themes/admin/script/Jquery_ui/jquery-ui.js"></script>-->
		<!-- Bootstrap JavaScript -->
		<script src="http://wmshoes.vn/themes/lam/style/bootstrap3/js/bootstrap.js"></script>
		<script type="text/javascript" src="http://wmshoes.vn/script/fancybox/jquery.fancybox.js"></script>
		<script type="text/javascript" src="http://wmshoes.vn/script/jcarousellite/jcarousellite.js"></script>
		<!-- <script type="text/javascript" src="http://wmshoes.vn/themes/lam/script/jquery.cycle.all/jquery.cycle.all.js"></script> -->
		<!-- <script type="text/javascript" src="http://wmshoes.vn/themes/lam/script/jquery.cycle.all/carousel.js"></script>-->
		<script type="text/javascript" src="http://wmshoes.vn/script/elevatezoom/jquery.elevateZoom-2.5.5.js"></script>
		<script type="text/javascript" src="http://wmshoes.vn/script/Nivoslider/jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="<?= base_url() ?>public/wmshoes/js/script.js"></script>
		<!-- <script type="text/javascript" src="http://wmshoes.vn/themes/lam/script/lam_script.js"></script> -->
		<script type="text/javascript">
			// Code livechat
		var __lc = {};
		__lc.license = 5428061;

		(function() {
			var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
			lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
		})();
			// End Code livechat
		</script>

			</body>
		</html>