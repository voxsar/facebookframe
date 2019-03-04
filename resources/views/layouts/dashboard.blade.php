<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Legistant: Dashboard</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/line-awesome/css/line-awesome.min.css')}}">
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('fonts/open-sans/styles.css')}}"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/montserrat/styles.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('libs/tether/css/tether.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/jscrollpane/jquery.jscrollpane.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/common.min.css')}}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/themes/primary.min.css')}}">
    <link class="ks-sidebar-dark-style" rel="stylesheet" type="text/css" href="{{ asset('assets/styles/themes/sidebar-black.min.css')}}">
    <!-- END THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/apps/crm/roles-permissions.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/summernote/summernote.css')}}"> <!-- original -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/libs/summernote/summernote.min.css')}}"> <!-- customization -->
</head>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-default ks-sidebar-position-fixed ks-page-header-fixed ks-theme-primary ks-page-loading"> <!-- remove ks-page-header-fixed to unfix header -->

@include('layouts/header')

<div class="ks-page-container">
    @include('layouts/sidebar')
    @yield('page')
</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('libs/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('libs/popper/popper.min.js')}}"></script>
<script src="{{ asset('libs/responsejs/response.min.js')}}"></script>
<script src="{{ asset('libs/loading-overlay/loadingoverlay.min.js')}}"></script>
<script src="{{ asset('libs/tether/js/tether.min.js')}}"></script>
<script src="{{ asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('libs/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
<script src="{{ asset('libs/jscrollpane/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('libs/flexibility/flexibility.js')}}"></script>
<script src="{{ asset('libs/noty/noty.min.js')}}"></script>
<script src="{{ asset('libs/velocity/velocity.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('assets/scripts/common.min.js')}}"></script>
<!-- END THEME LAYOUT SCRIPTS -->


<script>
    (function ($) {
        $('.ks-checkbox-switch :checkbox').on('change', function (e) {
            var checkbox = $(this);

            $('.dm-permissions-list-table :checkbox').each(function () {
                $(this).get(0).checked = checkbox.is(':checked');
            });

            return false;
        });
    })(jQuery);
</script>
<script src="{{ asset('libs/summernote/summernote.min.js')}}"></script>
<script type="application/javascript">
(function ($) {
    $('#ks-summernote-editor-default').summernote({
        'height': '600',
    });
    $('#ks-summernote-editor-air-mode').summernote({
        airMode: true,

    });
})(jQuery);
</script>
<div class="ks-mobile-overlay"></div>

<!-- BEGIN SETTINGS BLOCK -->
<div class="ks-settings-slide-block">
    <a class="ks-settings-slide-control">
        <span class="ks-icon la la-cog"></span>
    </a>

    <div class="ks-header">
        <span class="ks-text">Layout Options</span>
        <a class="ks-settings-slide-close-control">
            <span class="ks-icon la la-close"></span>
        </a>
    </div>

    <div class="ks-themes-list">
        <a href="index-2.html" class="ks-theme ks-primary ks-active"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-primary-dark/index.html" class="ks-theme ks-dark-primary"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-info/index.html" class="ks-theme ks-info"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-pink/index.html" class="ks-theme ks-blink-pink-san-marino"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-bermuda-gray/index.html" class="ks-theme ks-bermuda-gray-malachite"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-royal-blue/index.html" class="ks-theme ks-royal-blue-orchid"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-ebony-clay/index.html" class="ks-theme ks-ebony-clay-cerise-red"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-international-klein-blue/index.html" class="ks-theme ks-international-klein-blue-dixie"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-jungle-green/index.html" class="ks-theme ks-jungle-green-chambray"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-voodoo/index.html" class="ks-theme ks-voodoo-medium-purple"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-cornflower-blue/index.html" class="ks-theme ks-cornflower-blue-ecstasy"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-purple/index.html" class="ks-theme ks-purple-mandy"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-oslo-gray/index.html" class="ks-theme ks-oslo-gray-royal-blue"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-astronaut-blue/index.html" class="ks-theme ks-astronaut-blue-persian-green"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-old-brick/index.html" class="ks-theme ks-old-brick"></a>
        <a href="http://themesanytime.com/kosmo/demo/admin/default-white/index.html" class="ks-theme ks-white"></a>
    </div>

    <ul class="ks-settings-list">
        <li>
            <span class="ks-text">Collapsed Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-checkbox-toggle">
                <input type="checkbox" value="1">
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Fixed page header</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-page-header-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">Dark/Light Sidebar</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-sidebar-style-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
        <li>
            <span class="ks-text">White/Gray Content Background</span>
            <label class="ks-checkbox-slider ks-on-off ks-primary ks-content-bg-checkbox-toggle">
                <input type="checkbox" value="0" checked>
                <span class="ks-indicator"></span>
                <span class="ks-on">On</span>
                <span class="ks-off">Off</span>
            </label>
        </li>
    </ul>
</div>
<!-- END SETTINGS BLOCK -->
</body>
</html>