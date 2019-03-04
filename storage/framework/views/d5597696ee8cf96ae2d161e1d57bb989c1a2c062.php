

<?php $__env->startSection('page'); ?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>All Cases</h3>
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
                                    <form action="/cases/create" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Number')); ?></label>
                                            <div class="col-sm-9">
                                                <input name="caseno" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Number')); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Description')); ?></label>
                                            <div class="col-sm-9">
                                                <input name="description" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Description')); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Description (Sinhala)')); ?></label>
                                            <div class="col-sm-9">
                                                <input name="sdescription" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Description (Sinhala)')); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Description (Tamil)')); ?></label>
                                            <div class="col-sm-9">
                                                <input name="tdescription" type="text" class="form-control" id="default-input" placeholder="<?php echo e(__('Case Description (Tamil)')); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Case Type')); ?></label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="casetype">
                                                    <?php $__empty_1 = true; $__currentLoopData = $casetypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <option value="<?php echo e($case_type->id); ?>"><?php echo e($case_type->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Court')); ?></label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="court">
                                                    <?php $__empty_1 = true; $__currentLoopData = $courts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $court): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <option value="<?php echo e($court->id); ?>"><?php echo e($court->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-3 form-control-label"><?php echo e(__('Client')); ?></label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="user">
                                                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button class="btn btn-primary btn-block"><?php echo e(__('Add New Case')); ?></button>
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
                                            <th>Case Number </th>
                                            <th>Case Description</th>
                                            <th>Case Description (Sinhala)</th>
                                            <th>Case Description (Tamil)</th>
                                            <th>Client Name</th>
                                            <th>Case Type</th>
                                            <th>Court Type</th>
                                            <th>Fileling Date</th>
                                            <th style="width: 20%;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $cases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $case): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($case->caseno); ?></td>
                                                <td><?php echo e($case->description); ?></td>
                                                <td><?php echo e($case->sdescription); ?></td>
                                                <td><?php echo e($case->tdescription); ?></td>
                                                <td><?php echo e($case->casetype->name); ?></td>
                                                <td><?php echo e($case->court->name); ?></td>
                                                <td><?php echo e($case->client->name); ?></td>
                                                <td><?php echo e($case->created_at); ?></td>
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