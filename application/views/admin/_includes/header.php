<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.ele_img.main_img img {
				border: 10px solid #FFB0B0;
			}
			.ele_img {
				float: left;
				width: 185px;
			}

			.ele_img img {
				width: 128px !important;
			}
			.ele_img .glyphicon{
				cursor: pointer;
				font-size: 20px;
			}
			#button_hidden_debug{
			}
			.hidden_debug {
				display: none;
				position: absolute;
				top:0;
				left:0;
			}
			.hidden_debug pre{
				opacity: 0.8;
			}
			#button_hidden_debug {
				position: absolute;
				top: 0;
				right: 0;
			}
			.pagination-box > * {
				padding: 7px;
				background: #F7F7F9;
			}
		</style>
	</head>
	<body>

	<button id="button_hidden_debug" type="button" class="btn">Show_debug</button>
	<div style="position:relative;">
		<div class="hidden_debug"><?php 
			echo "<pre>";
				print_r($this->_ci_cached_vars);
			echo "</pre>";
			  ?> <h3>SQL</h3> <?php 
			echo "<pre>";
				print_r($this->db->queries);
			echo "</pre>"; 
			?>
		</div>
	</div>

		<div class="container">
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Admin:</strong> Page
		</div>