<?php $__env->startSection('title'); ?>
Login
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
                         <h4 class="blue" id="id-company-text">&copy; Customers Login</h4>
                    </div>
                    <div class="space-6"></div>
                     <div class="position-relative">
                         <div id="login-box" class="login-box visible widget-box no-border">
                             <div class="widget-body">
                                 <div class="widget-main">
                                     <h4 class="header blue lighter bigger">
                                         <i class="ace-icon fa fa-coffee green"></i>
                                         Please Enter Your Information
                                     </h4>
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
                                     <form method="post" action="<?php echo e(route('signin')); ?>">
                                         <fieldset>
                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" value="<?php echo e(Request::old('username')); ?>"  />
                                                    <i class="ace-icon fa fa-user"></i>
                                                 </span>
                                             </label>

                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="password" id="password" class="form-control" placeholder="Password" value="<?php echo e(Request::old('password')); ?>" name="password" />
                                                     <i class="ace-icon fa fa-lock"></i>
                                                 </span>
                                             </label>
                                              <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" >

                                             <div class="space"></div>

                                             <div class="clearfix">                        

                                                 <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                     <i class="ace-icon fa fa-key"></i>
                                                     <span class="bigger-110">Login</span>
                                                 </button>
                                             </div>

                                             <div class="space-4"></div>
                                         </fieldset>
                                     </form>



                                     <div class="space-6"></div>

                                 </div><!-- /.widget-main -->

                                 <div class="toolbar clearfix">
                                     <div>
                                         <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                             <i class="ace-icon fa fa-arrow-left"></i>
                                             I forgot my password
                                         </a>
                                     </div>

                                     <div>
                                         <a href="#" data-target="#signup-box" class="user-signup-link">
                                             I want to register
                                             <i class="ace-icon fa fa-arrow-right"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div><!-- /.widget-body -->
                         </div><!-- /.login-box -->

                         <div id="forgot-box" class="forgot-box widget-box no-border">
                             <div class="widget-body">
                                 <div class="widget-main">
                                     <h4 class="header red lighter bigger">
                                         <i class="ace-icon fa fa-key"></i>
                                         Retrieve Password
                                     </h4>

                                     <div class="space-6"></div>
                                     <p>
                                         Enter your email and to receive instructions
                                     </p>

                                     <form  method="post" action="<?php echo e(route('forgot')); ?>" >
                                         <fieldset>
                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                                                     <i class="ace-icon fa fa-envelope"></i>
                                                 </span>
                                             </label>
                                              <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" >
                                             <div class="clearfix">
                                                 <button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
                                                     <i class="ace-icon fa fa-lightbulb-o"></i>
                                                     <span class="bigger-110">Send Me!</span>
                                                 </button>
                                             </div>
                                         </fieldset>
                                     </form>
                                 </div><!-- /.widget-main -->

                                 <div class="toolbar center">
                                     <a href="#" data-target="#login-box" class="back-to-login-link">
                                         Back to login
                                         <i class="ace-icon fa fa-arrow-right"></i>
                                     </a>
                                 </div>
                             </div><!-- /.widget-body -->
                         </div><!-- /.forgot-box -->

                         <div id="signup-box" class="signup-box widget-box no-border">
                             <div class="widget-body">
                                 <div class="widget-main">
                                     <h4 class="header green lighter bigger">
                                         <i class="ace-icon fa fa-users blue"></i>
                                         New User Registration
                                     </h4>

                                     <div class="space-6"></div>
                                     <p> Enter your details to begin: </p>

                                     <form method="post" action="<?php echo e(route('signup')); ?>">
                                         <fieldset>
                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="text" class="form-control" placeholder="First Name" name="first_name" id="firstname" value="<?php echo e(Request::old('first_name')); ?>"  />
                                                     <i class="ace-icon fa fa-user"></i>
                                                 </span>
                                             </label>
                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="text" id="lastname" class="form-control" placeholder="Last Name" name="last_name" value="<?php echo e(Request::old('last_name')); ?>"  / />
                                                     <i class="ace-icon fa fa-user"></i>
                                                 </span>
                                             </label>
                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="email" id="email1" class="form-control" placeholder="Email" name="email" value="<?php echo e(Request::old('email')); ?>"  / />
                                                     <i class="ace-icon fa fa-envelope"></i>
                                                 </span>
                                             </label>
                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="text" id="phone"  class="form-control number-only" placeholder="Mobile" name="mobile" value="<?php echo e(Request::old('mobile')); ?>"  / />
                                                     <i class="ace-icon fa fa-phone"></i>
                                                 </span>
                                             </label>
                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="text" id="username1" class="form-control" placeholder="Username" name="username" id="" value="<?php echo e(Request::old('username')); ?>"  / />
                                                     <i class="ace-icon fa fa-user"></i>
                                                 </span>
                                             </label>

                                             <label class="block clearfix">
                                                 <span class="block input-icon input-icon-right">
                                                     <input type="password" class="form-control" placeholder="Password" name="password" id="password1" value="<?php echo e(Request::old('password')); ?>"  / />
                                                     <i class="ace-icon fa fa-lock"></i>
                                                 </span>
                                             </label>
                                             <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>" >
                                             <div class="space-24"></div>

                                             <div class="clearfix">


                                                 <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                     <span class="bigger-110">Register</span>

                                                     <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                 </button>
                                             </div>
                                         </fieldset>
                                     </form>
                                 </div>

                                 <div class="toolbar center">
                                     <a href="#" data-target="#login-box" class="back-to-login-link">
                                         <i class="ace-icon fa fa-arrow-left"></i>
                                         Back to login
                                     </a>
                                 </div>
                             </div><!-- /.widget-body -->
                         </div><!-- /.signup-box -->
                     </div><!-- /.position-relative -->
                 </div>
             </div><!-- /.col -->
        </div><!-- /.row -->
     </div><!-- /.main-content -->
</div><!-- /.main-container -->
<script>
    jQuery(function(){ //short for $(document).ready(function(){
    $("#firstname").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter firstname"
    });
    $("#lastname").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter lastname"
    });
    $("#password").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter password"
    });
    $("#username").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter username"
    });
    $("#username1").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter username"
    });
    $("#phone").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter mobile number"
    }); 
    $("#password").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter password"
    }); 
    $("#password1").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter password"
    }); 
    $("#email").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter email"
    });
    jQuery("#email").validate({
        expression: "if (VAL.match(\/^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+$\/) && VAL) return true; else return false;",
    message: "Please enter valid email"
    });
    $("#email1").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter email"
    });
    jQuery("#email1").validate({
        expression: "if (VAL.match(\/^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})+$\/) && VAL) return true; else return false;",
    message: "Please enter valid email"
    });
});

$(function(){         
      $('.number-only').keyup(function(e) {
            if(this.value!='-')
              while(isNaN(this.value))
                this.value = this.value.split('').reverse().join('').replace(/[\D]/i,'')
                                       .split('').reverse().join('');
        })
        .on("cut copy paste",function(e){
            e.preventDefault();
        });
    });



</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>