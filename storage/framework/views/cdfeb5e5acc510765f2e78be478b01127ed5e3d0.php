<?php $__env->startSection('content'); ?>

<div  class="container">
    <div   class="row justify-content-center">
        <div   class="col-md-8">
            <div style="background-color:	#F0FFF0;"  class="card">
               <h1><strong><div style="color:black; padding-left:300px;" class="card-header"><?php echo e(__('Login/Register')); ?></div></strong></h1> 

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label style="color:black;" for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail  ')); ?></label>

                            <div class="col-md-6">
                                <input style="width:300px;"  id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color:black;" for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input  style="width:300px;"    id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button  style="width:300px; background-color:	#00008B;" type="submit" class="btn btn-primary">
                                  <strong>  <?php echo e(__('Login')); ?> </strong>
                                </button>
   
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label   class="form-check-label" for="remember">
                                        <?php echo e(__('Remenber Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div   class="container">
    <div  class="row justify-content-center">
        <div class="col-md-8">
            <div style="background-color:	#F0FFF0;" class="card">
                <strong><a style="padding-left:320px;  color:black;" href="http://127.0.0.1:8000/register">Create a new account?</a></strong>
                <div class="form-group row mb-0">
                            <div  class="col-md-8 offset-md-4">
                                <button  href="http://127.0.0.1:8000/register"  style="width:300px;  color:#00008B; background-color:#F0FFF0;"   class="btn btn-primary">
                                  <strong>  <?php echo e(__('Create Account')); ?> </strong>
                                </button>
                                 
                            </div>
                        </div>
                      
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel-ecommerce-channel/resources/views/auth/login.blade.php ENDPATH**/ ?>