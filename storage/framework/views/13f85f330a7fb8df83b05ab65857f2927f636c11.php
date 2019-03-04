

<?php $__env->startSection('page'); ?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>New Case Update</h3>
        </section>
    </div>
    <div class="ks-page-content">
        <div class="ks-page-content-body">
            <div class="ks-nav-body-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Number')); ?></label>
                                        <div class="col-sm-9">
                                            <input name="caseno" type="text" class="form-control" id="default-input" readonly="" value="<?php echo e($case->caseno); ?>" placeholder="<?php echo e(__('Case Number')); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Description')); ?></label>
                                        <div class="col-sm-9">
                                            <input name="description" readonly="" value="<?php echo e($case->description); ?>" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Description')); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Description (Sinhala)')); ?></label>
                                        <div class="col-sm-9">
                                            <input name="sdescription" readonly="" value="<?php echo e($case->sdescription); ?>" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Description (Sinhala)')); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Description (Tamil)')); ?></label>
                                        <div class="col-sm-9">
                                            <input name="tdescription" readonly="" value="<?php echo e($case->tdescription); ?>" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Description (Tamil)')); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Type')); ?></label>
                                        <div class="col-sm-9">
                                             <?php echo e($case->casetype->name); ?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Court')); ?></label>
                                        <div class="col-sm-9">
                                            <?php echo e($case->court->name); ?>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Client')); ?></label>
                                        <div class="col-sm-9">
                                            <?php echo e($case->client->name); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Update Title')); ?></label>
                                        <div class="col-sm-9">
                                            <input name="title" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Description')); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <textarea name="description" id="ks-summernote-editor-default"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-pagination="true" data-search="true" >
                                        <thead>
                                            <tr>
                                                <th>Case Update Number </th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th style="width: 20%;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $case->caseupdates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $updates): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><?php echo e($case->caseupdateno); ?></td>
                                                    <td>
                                                        <?php echo e($case->title); ?>

                                                    </td>
                                                    <td><?php echo e($case->description); ?></td>
                                                    <td>
                                                        <a href="" name="edit" type="submit" class="btn btn-block btn-success">View Case Updates</a>
                                                        
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>