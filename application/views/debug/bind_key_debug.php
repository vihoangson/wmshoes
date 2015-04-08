<script>
		$(document).bind('keyup', function(event) {
			if(event.altKey&&event.ctrlKey){
				switch(event.keyCode){
					<?php
					$array_keys=array(
						49=>"/wmshoes/",
						50=>"/wmshoes/shopping",
						51=>"/wmshoes/detail/W0219P-Pink",						
					);
					foreach ($array_keys as $key => $value) {					
						  ?> 
						case <?php echo $key ?>:
							window.location.replace("<?php echo $value; ?>");
						break;
						   <?php 
					}
					?>
				}
			}
		});
</script>