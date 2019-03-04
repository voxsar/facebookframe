

<?php $__env->startSection('content'); ?>
<div class="ks-logo">LEGISTANT</div>

<div class="card panel panel-default ks-light ks-panel ks-login">
    <div class="card-block">
        <h4 class="ks-header">Privacy Policy</h4>
        
        <div class="ks-text-center">
            The privacy policy content will be inserted here and it will be in generic but detailed form
        </div>

        <div class="ks-social">
            <div>Follow us on social media</div>
            <div>
                <a href="#" class="facebook la la-facebook"></a>
                <a href="#" class="twitter la la-twitter"></a>
                <a href="#" class="google la la-google"></a>
            </div>
        </div>
    </div>
</div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/sign-layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>