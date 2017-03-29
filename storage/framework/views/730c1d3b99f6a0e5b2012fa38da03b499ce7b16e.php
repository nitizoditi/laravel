<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $__env->yieldContent('title'); ?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="public/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="public/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="public/assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="public/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="public/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="public/assets/css/ace-rtl.min.css" />
		<script src="public/assets/js/jquery-2.1.4.min.js"></script>
		<script src="public/js/jquery.validate.js"></script>
		<script src="public/js/jquery-ui.js"></script>
		<style>
			.ValidationErrors{
				color:red;
			}
		</style>
		<script src="public/assets/js/ace-extra.min.js"></script>
		
	</head>

	<body class="no-skin">
    
            
		<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
		<div class="main-container" id="main-container">
                   <?php echo $__env->make('includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="main-content">
                        <div class="main-content-inner">
                         <div class="space-6"></div>
	                         <?php if(count($errors) >0): ?>
	                        <div class="alert alert-danger">
	                             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                <li style="list-style:none;"><?php echo e($error); ?></li>
	                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                        </div>
	                         <?php endif; ?>
	                            <div class="flash-message">
	                                <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                  <?php if(Session::has('alert-' . $msg)): ?>
	                                  <p class="alert alert-<?php echo e($msg); ?>"><?php echo e(Session::get('alert-' . $msg)); ?> </p>
	                                  <?php endif; ?>
	                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </div>
	                        <div class="space-6"></div> 

                            <?php echo $__env->yieldContent('content'); ?>
                            
                        </div>
                    </div>

                    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            
            
            
            
            


		
		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="public/assets/js/bootstrap.min.js"></script>
		<script src="public/assets/js/jquery-ui.custom.min.js"></script>
		<script src="public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="public/assets/js/jquery.easypiechart.min.js"></script>
		<script src="public/assets/js/jquery.sparkline.index.min.js"></script>
		<script src="public/assets/js/jquery.flot.min.js"></script>
		<script src="public/assets/js/jquery.flot.pie.min.js"></script>
		<script src="public/assets/js/jquery.flot.resize.min.js"></script>
		<script src="public/assets/js/ace-elements.min.js"></script>
		<script src="public/assets/js/ace.min.js"></script>

	</body>
</html>
