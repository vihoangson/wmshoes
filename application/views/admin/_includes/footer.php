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
			$.post('/wmshoes/ajax/delete_img_p', {id: id}, function(data, textStatus, xhr) {
				if(parseInt(data)==1){
					curr.parent("div.ele_img").hide();	
				}else{
					console.log("error_delete_img");
				}
			});
		});
		</script>
	</body>
</html>
