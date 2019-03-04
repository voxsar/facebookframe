

<?php $__env->startSection('page'); ?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Blank Page</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="container-fluid">
                Blank page content.
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>