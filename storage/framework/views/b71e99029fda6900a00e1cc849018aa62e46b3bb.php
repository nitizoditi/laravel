<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $__env->yieldContent('title'); ?></title>
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="public/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="public/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="public/assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="public/assets/css/ace-rtl.min.css" />
		<script src="public/assets/js/jquery-2.1.4.min.js"></script>
		<script src="public/js/jquery.validate.js"></script>
		<script src="public/js/jquery-ui.js"></script>
		<style>
			.ValidationErrors{
				color:red;
			}
		</style> 
	</head>

	<body class="login-layout">
			<?php echo $__env->yieldContent('content'); ?>
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 
			 
			});
		</script>
	</body>
</html>
