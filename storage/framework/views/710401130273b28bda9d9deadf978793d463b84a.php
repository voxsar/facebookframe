

<?php $__env->startSection('content'); ?>
<div class="ks-logo">LEGISTANT</div>

<div class="card panel panel-default ks-light ks-panel ks-signup">
    <div class="card-block">
        <form action="/lawyers/create" method="post" class="form-container">
            <h4 class="ks-header">Sign Up</h4>
            <div class="form-group row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon icon-left icon-lg icon-color-primary">
                    <input type="text" class="form-control" placeholder="Phone">
                <span class="icon-addon">
                    <span class="la la-phone"></span>
                </span>
                </div>
            </div>
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
                    <input type="password" class="form-control" placeholder="Password">
                <span class="icon-addon">
                    <span class="la la-key"></span>
                </span>
                </div>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block">Sign Up</button>
            </div>
            <div class="ks-text-center">
                <span class="text-muted">By clicking "Sign Up" I agree the </span> <a href="/privacy">Terms Of Service</a>
            </div>
            <div class="ks-text-center">
                Already have an account? <a href="/signin">Login</a>
            </div>

            <div class="ks-social">
                <div class="pull-lg-left">or Log In with social</div>
                <div class="pull-lg-right">
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