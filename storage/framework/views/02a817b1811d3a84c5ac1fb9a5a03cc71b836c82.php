<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/line-awesome/css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/fonts/open-sans/styles.css">
        <link rel="stylesheet" type="text/css" href="libs/tether/css/tether.min.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/common.min.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/pages/auth.min.css">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles 
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">-->
    </head>
    <body>
        <div class="ks-page">
            <div class="ks-page-header">
                <a href="#" class="ks-logo"><?php echo e(config('app.name', 'Laravel')); ?></a>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links 
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>-->
                </ul>
            </div>
            <div class="ks-page-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <div class="ks-footer">
                <span class="ks-copyright">&copy; 2018 - <?php echo date("Y"); ?></span>
                <ul>
                    <li>
                        <a href="/privacy">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
