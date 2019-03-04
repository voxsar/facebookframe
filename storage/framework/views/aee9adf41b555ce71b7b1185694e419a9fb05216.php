<!-- BEGIN DEFAULT SIDEBAR -->
<div class="ks-column ks-sidebar ks-info">
    <div class="ks-wrapper ks-sidebar-wrapper">
        <ul class="nav nav-pills nav-stacked">
            <li class="nav-item ks-user dropdown">
                <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/avatars/avatar-12.jpg" width="36" height="36" class="ks-avatar rounded-circle">
                    <div class="ks-info">
                    </div>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="/settings">Settings</a>
                </div>
            </li>
            <?php $__empty_1 = true; $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="nav-item dropdown">
                <?php if($menu->has_submenu == 1): ?>
                    <a class="nav-link dropdown-toggle"  href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-icon la <?php echo e($menu->menuicon); ?>"></span>
                        <span><?php echo e($menu->menuname); ?></span>
                    </a>
                    <div class="dropdown-menu">
                    <?php $__empty_2 = true; $__currentLoopData = $menu->submenus()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                        <a class="dropdown-item" href="<?php echo e($submenu->menulink); ?>"><?php echo e($submenu->menuname); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>

                    <?php endif; ?>
                    </div>
                <?php else: ?>
                    <a class="nav-link"  href="<?php echo e($menu->menulink); ?>" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-icon la <?php echo e($menu->menuicon); ?>"></span>
                        <span><?php echo e($menu->menuname); ?></span>
                    </a>
                <?php endif; ?>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="nav-item dropdown">
                    Not Logged In
                </li>
            <?php endif; ?>
        </ul>
        <div class="ks-sidebar-extras-block">
            <!--<div class="ks-extras-block-item">
                <div class="ks-name">Monthly Badwidth Transfer</div>
                <div class="ks-progress">
                    <div class="progress ks-progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 84%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="ks-description">
                    <span class="ks-amount">84%</span>
                    <span class="ks-text">(8 400 MB of 10 000)</span>
                </div>
            </div>
            <div class="ks-extras-block-item">
                <div class="ks-name">Disk Space Usage</div>
                <div class="ks-progress">
                    <div class="progress ks-progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 36%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="ks-description">
                    <span class="ks-amount">36%</span>
                    <span class="ks-text">(3 600 MB of 10 000)</span>
                </div>
            </div>-->
            <div class="ks-sidebar-copyright">© 2018 - <?php echo e(date("Y")); ?> Legistant. All Rights Reserved</div>
        </div>
    </div>
</div>
<!-- END DEFAULT SIDEBAR -->