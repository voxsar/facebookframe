

<?php $__env->startSection('content'); ?>
<div class="ks-logo">LEGISTANT</div>

<div class="card panel panel-default light ks-panel ks-forgot-password">
    <div class="card-block">
        <form class="form-container">
            <h4 class="ks-header">
                Forgot Password
                <span>Don't worry, this happens sometimes.</span>
            </h4>

            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input type="text" class="form-control" placeholder="Email">
                <span class="icon-addon">
                    <span class="la la-at"></span>
                </span>
                </div>
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block">Submit</button>
            </div>
            <div class="ks-text-center">
                <span class="text-muted">Remember It?</span> <a href="/signin">Login</a>
            </div>
        </form>
    </div>
</div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/sign-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>