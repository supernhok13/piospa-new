<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo $__env->yieldContent('title', 'Laravel'); ?></title>
        
        <!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		
		
        <?php echo $__env->yieldContent('before_style'); ?>
        <!--Page Vendors -->
		<link href="<?php echo e(asset('static/backend/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		
		<!--Base Styles -->
		<link href="<?php echo e(asset('static/backend/assets/vendors/base/vendors.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('static/backend/assets/demo/demo9/base/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(asset('static/backend/css/customize.css')); ?>" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?php echo e(asset('static/backend/assets/demo/demo9/media/img/logo/favicon.ico')); ?>" />
        <?php echo $__env->yieldContent('after_style'); ?>
    </head>
    <body class="m--skin- m-page--loading-enabled m-page--loading m-content--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--offcanvas-default m-aside-left--enabled m-aside-left--fixed m-aside-left--skin-dark m-aside--offcanvas-default">
    	<?php echo $__env->make('components.page-load', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    	
    	<div class="m-grid m-grid--hor m-grid--root m-page">
        	<?php echo $__env->make('components.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        	<?php echo $__env->make('components.left-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        	
        	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
        		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-container--full-height">
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
						<?php echo $__env->yieldContent('page_subheader'); ?>
						
						<div class="m-content">
        					<?php echo $__env->yieldContent('content'); ?>
        				</div>
    				</div>
				</div>
        	</div>
        	
        	<?php echo $__env->make('components.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    	</div>
    	
    	<?php echo $__env->make('components.scroll-top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    	
    	
    	<script src="<?php echo e(asset('js/laroute.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('static/backend/assets/vendors/base/vendors.bundle.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('static/plugins/jquery-ui-1.12.1/jquery-ui.min.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('static/backend/assets/demo/demo9/base/scripts.bundle.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('static/backend/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')); ?>" type="text/javascript"></script>
		<script src="<?php echo e(asset('static/backend/js/mylib/table-manager.js')); ?>" type="text/javascript"></script>
    	<script type="text/javascript">
        	$(window).on('load', function() {
                $('body').removeClass('m-page--loading');         
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        </script>
    	<?php echo $__env->yieldContent('after_script'); ?>
    </body>
</html>