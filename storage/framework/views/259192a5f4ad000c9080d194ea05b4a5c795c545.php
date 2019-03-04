

<?php $__env->startSection('content'); ?>
<div class="ks-logo">LEGISTANT</div>

<div class="card panel panel-default ks-light ks-panel ks-login">
    <div class="card-block">
        <form class="form-container" action="<?php echo e(route('login')); ?>" method="post">
            <h4 class="ks-header">Login</h4>
            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input type="text" class="form-control" placeholder="Email">
                    <span class="icon-addon">
                        <span class="la la-at"></span>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input type="text" class="form-control" placeholder="Password">
                    <span class="icon-addon">
                        <span class="la la-key"></span>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="ks-text-center">
                Don't have an account. <a href="/signup">Sign Up</a>
            </div>
            <div class="ks-text-center">
                <a href="/forgot">Forgot your password?</a>
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
<?php echo $__env->make('layouts/sign-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>