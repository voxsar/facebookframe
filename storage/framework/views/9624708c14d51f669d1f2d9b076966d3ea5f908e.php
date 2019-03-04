<?php $__env->startSection('content'); ?>
<div class="ks-logo">LEGISTANT</div>

<div class="card panel panel-default ks-light ks-panel ks-login">
    <div class="card-block">
        <form class="form-container" action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h4 class="ks-header">Login</h4>
            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input id="email" type="email" name="email" type="text" class="form-control form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" autofocus placeholder="<?php echo e(__('E-Mail Address')); ?>">
                    <span class="icon-addon">
                        <span class="la la-at"></span>
                    </span>
                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input id="password" name="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Password">
                    <span class="icon-addon">
                        <span class="la la-key"></span>
                    </span>
                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 ">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                        <label class="custom-control-label" for="remember">
                            <?php echo e(__('Remember Me')); ?>

                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary btn-block">
                        <?php echo e(__('Login')); ?>

                    </button>
                </div>
            </div>
            <div class="ks-text-center">
                Don't have an account. <a href="/signup">Sign Up</a>
            </div>
            <div class="ks-text-center">
                <a href="<?php echo e(route('password.request')); ?>">Forgot your password?</a>
            </div>

            <div class="ks-social">
                <div>or Log In with social</div>
                <div>
                    <a href="#" class="facebook la la-facebook"></a>
                    <a href="#" class="twitter la la-twitter"></a>
                    <a href="#" class="google la la-google"></a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>