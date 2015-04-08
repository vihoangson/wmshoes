		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script>
		$("#button_hidden_debug").click(function(event) {
			$(".hidden_debug").toggle(400);
		});
		$(".delete_img_p").click(function(event) {
			var id=$(this).data('id');
			var curr=$(this);
			if(!confirm("Bạn có muốn xóa")) return;
			$.post('/wmshoes/ajax/delete_img_p', {id: id}, function(data, textStatus, xhr) {
				if(parseInt(data)==1){
					curr.closest("div.ele_img").hide();
				}else{
					console.log("error_delete_img");
				}
			});
		});
		$("#img_border .set_main_img_p").click(function(event) {
			var id=$(this).data('id');
			var curr=$(this);
			$.post('/wmshoes/ajax/set_main_img', {id: id}, function(data, textStatus, xhr) {
				if(parseInt(data)==1){
					$(".ele_img").removeClass('main_img');
					curr.closest(".ele_img").addClass('main_img');
					console.log("success");
				}else{
					console.log("error_delete_img"+data);
				}
			});

		});
		</script>
	</body>
</html>
