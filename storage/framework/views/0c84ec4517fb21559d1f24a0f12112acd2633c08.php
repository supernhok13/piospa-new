<?php $__env->startSection('page_subheader'); ?>
	<?php echo $__env->make('components.subheader', ['title' => 'Người dùng'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-xl-12">
		<div class="m-portlet m-portlet--mobile ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Danh sách người dùng
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body" id="autotable">
				<form class="m-form m-form--fit m-form--label-align-right frmFilter">
    				<div class="m-form m-form--label-align-right m--margin-bottom-30">
    					<div class="row align-items-center m--margin-bottom-10">
    						<div class="col-xl-6 order-2 order-xl-1">
    							<div class="form-group m-form__group row align-items-center">
    								<div class="input-group col-xs-10">
    									<div class="input-group-append">
        									<select class="form-control search-type" name="search_type">
        										<option value="email">Email</option>
        										<option>Điện thoại</option>
        									</select>
        								</div>
        								<input type="text" class="form-control" name="search_keyword" placeholder="Nhập nội dung tìm kiếm">
        								<div class="input-group-append">
        									<button class="btn btn-primary">
        										<i class="fa fa-search"></i>
        									</button>
        								</div>
        							</div>
    							</div>
    						</div>
    						<div class="col-xl-6 order-1 order-xl-2 m--align-right">
    							<!-- <button type="button" class="btn m-btn--pill m-btn--air btn-primary"><i class="fa fa-file-excel-o"></i> Import excel</button>
        						<button type="button" class="btn m-btn--pill m-btn--air btn-primary"><i class="fa fa-file-excel-o"></i> Export excel</button>  -->
        						<a href="<?php echo e(route('user.add')); ?>" class="btn m-btn--pill m-btn--air btn-primary"><i class="la la-plus-square"></i> Thêm người dùng</a>
    							<div class="m-separator m-separator--dashed d-xl-none"></div>
    						</div>
    					</div>
    					
    					<?php echo $__env->make('helpers.filter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    				</div>
				</form>
			
				<div class="table-content">
					<?php echo $__env->make('user::index.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div><!-- end table-content -->
				
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('after_script'); ?>
	<script src="<?php echo e(asset('static/backend/js/user/list.js')); ?>" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>