

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
                            <div class="container-fluid">
                                <table id="ks-datatable" class="table table-striped table-bordered" width="100%" data-pagination="true" data-search="true" >
                                    <thead>
                                        <tr>
                                            <th>Case Number </th>
                                            <th>Case Description</th>
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
                                                <td>
                                                    <?php echo e($case->description); ?> <br/>
                                                    <?php echo e($case->sdescription); ?> <br/>
                                                    <?php echo e($case->tdescription); ?>

                                                </td>
                                                <td><?php echo e($case->client->name); ?></td>
                                                <td><?php echo e($case->casetype->name); ?></td>
                                                <td><?php echo e($case->court->name); ?></td>
                                                <td><?php echo e($case->created_at); ?></td>
                                                <td>
                                                    <a href="<?php echo e(url('caseupdate/')); ?>/<?php echo e($case->id); ?>" name="edit" type="submit" class="btn btn-block btn-success">View Case Updates</a>
                                                    <a href="<?php echo e(url('caseupdate/')); ?>/<?php echo e($case->id); ?>/create" name="edit" type="submit" class="btn btn-block btn-primary">Add Case Update</a>
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