

<?php $__env->startSection('page'); ?>
<div class="ks-column ks-page">
    <div class="ks-page-header">
        <section class="ks-title">
            <h3>All <?php echo e($usertype_title); ?></h3>
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
                                            <th>Name</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Created At</th>
                                            <th style="width: 10%;">Edit</th>
                                            <th style="width: 10%;">Delete</th>
                                            <th style="width: 10%;">Approve</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->fname); ?></td>
                                                <td><?php echo e($user->lname); ?></td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->address); ?></td>
                                                <td><?php echo e($user->created_at); ?></td>
                                                <td>
                                                    <button name="edit" type="submit" class="btn btn-warning">Edit</button>
                                                </td>
                                                <td>
                                                    <button name="delete" type="submit" class="btn btn-danger">Delete</button>
                                                </td>
                                                <td>
                                                    <button name="delete" type="submit" class="btn btn-success">Approve</button>
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