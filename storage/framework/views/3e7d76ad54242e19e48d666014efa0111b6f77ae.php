<?php $__env->startSection('title'); ?>
Verify
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="main-container">
    <div class="main-content">
         <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                         <h1>
                             <i class="ace-icon fa fa-leaf green"></i>
                             <span class="red">SMS</span>
                             <span class="white" id="id-text2">Application</span>
                         </h1>
                         <h4 class="blue" id="id-company-text">&copy; Customers Verification</h4>
                    </div>
                    <div class="space-6"></div>
                     <div class="position-relative">
                         <div id="login-box" class="login-box visible widget-box no-border">
                             <div class="widget-body">
                                 <div class="widget-main">
                                     <h4 class="header blue lighter bigger">
                                         <i class="ace-icon fa fa-coffee green"></i>
                                         Please Enter Verification code
                                     </h4>
                                     <div class="space-6"></div>
                                     <?php if(count($errors) >0): ?>
                                    <div class="alert alert-danger">
                                         <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li style="list-style:none;"><?php echo e($error); ?></li>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                     <?php endif; ?>                                    
                                     <form method="post" action="<?php echo e(route('activate')); ?>">
                                         <fieldset>
                                            <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                    <input type="text" class="form-control" placeholder="verification code" name="code" value="<?php echo e(Request::old('code')); ?>"  />
                                                    <i class="ace-icon fa fa-lock"></i>
                                                 </span>
                                            </label>                                          
                                            <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" >

                                             <div class="space"></div>

                                             <div class="clearfix">                        

                                                 <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                     <i class="ace-icon fa fa-key"></i>
                                                     <span class="bigger-110">verify</span>
                                                 </button>
                                             </div>

                                             <div class="space-4"></div>
                                         </fieldset>
                                     </form>
                                     <div class="space-6"></div>
                                 </div><!-- /.widget-main -->                                
                             </div><!-- /.widget-body -->
                         </div><!-- /.login-box -->                   
                     </div><!-- /.position-relative -->
                 </div>
             </div><!-- /.col -->
        </div><!-- /.row -->
     </div><!-- /.main-content -->
</div><!-- /.main-container -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>