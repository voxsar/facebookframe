

<?php $__env->startSection('page'); ?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>Case Types</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <form action="/casetypes/create" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Type')); ?></label>
                                            <div class="col-sm-9">
                                                <input name="name" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Court Type')); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Type (Sinhala)')); ?></label>
                                            <div class="col-sm-9">
                                                <input name="sname" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Court Type (Sinhala)')); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Type (Tamil)')); ?></label>
                                            <div class="col-sm-9">
                                                <input name="tname" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Court Type (Tamil)')); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button class="btn btn-primary btn-block"><?php echo e(__('Add New Case Type')); ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="container-fluid">
                                <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-pagination="true" data-search="true" >
                                    <thead>
                                        <tr>
                                            <th>Case Type</th>
                                            <th>Case Type (Sinhala)</th>
                                            <th>Case Type (Tamil)</th>
                                            <th style="width: 20%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $casetypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($case->name); ?></td>
                                                <td><?php echo e($case->sname); ?></td>
                                                <td><?php echo e($case->tname); ?></td>
                                                <td>
                                                    <button name="edit" type="submit" class="btn btn-warning">Edit</button>
                                                    <button name="delete" type="submit" class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>