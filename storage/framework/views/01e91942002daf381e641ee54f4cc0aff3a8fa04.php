<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <!-- ====== Meta site ================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <?php if(isset(Setting()->SiteTitle)): ?>
        <title><?php echo e(Setting()->SiteTitle); ?></title>
    <?php else: ?>
        <title>Dashboard</title>
    <?php endif; ?>
    <!-- ====== Laravel description site edit delete from admin panel ================== -->
    <meta name="description" content="<?php echo e(Setting()->MetaDescription); ?>">
    <!-- ====== Laravel author site edit delete from admin panel ====================== -->
    <meta name="author" content="<?php echo e(Setting()->MetaDescription); ?>">
    <!-- ======  Laravel keywords site edit delete from admin panel ================== -->
    <meta name="keywords" content="<?php echo Setting()->MetaKeyWords; ?>">
    <!-- ====== Laravel robots site edit delete from admin panel ================== -->
    <meta name="robots" content="<?php echo Setting()->Name; ?>">
    <!-- ====== Laravel favicon icon================== -->
    <link rel="apple-touch-icon" sizes="57x57"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo e(asset('dashboardassets/images/favicon/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo e(asset('dashboardassets/images/favicon/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('<?php echo Setting()->FaviconOne; ?>')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('<?php echo Setting()->FaviconTwo; ?>')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('<?php echo Setting()->FaviconThree; ?>')); ?>">
    <link rel="manifest" href="<?php echo e(asset('dashboardassets/images/favicon/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ====== Laravel favicon icon ================== -->
    <link href="<?php echo e(asset('dashboardassets/styles/all.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/icon.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/icons.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/new.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/aragon-dashboards.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/extras.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/animated.1.1.0.min.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link href="<?php echo e(asset('dashboardassets/styles/quill.snow.css')); ?>" rel="stylesheet">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/froala_editor.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/froala_style.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/code_view.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/colors.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/emoticons.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/image_manager.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/image.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/line_breaker.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/table.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/char_counter.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/video.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/fullscreen.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/plugins/file.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="<?php echo e(asset('dashboardassets/froala/css/themes/dark.css')); ?>">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    <!-- ============================================= styles SiteTitle ============================================= -->
    <script async defer src="<?php echo e(asset('dashboardassets/scripts/buttons.js')); ?>"></script>
    <!-- ============================================= styles SiteTitle ============================================= -->
    <script async defer src="<?php echo e(asset('dashboardassets/scripts/customPost.js')); ?>"></script>

</head>

<body class="h-100">
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                        <a class="navbar-brand w-100 mr-0" href="<?php echo e(url('/')); ?>" style="line-height: 25px;"
                            target="_blank">
                            <div class="d-table m-auto">
                                <!-- ============================================= Name SiteTitle ============================================= -->
                                <img id="main-logo" class="d-inline-block align-top mr-1 rounded-circle20"
                                    src="<?php echo e(asset(Setting()->LogoPicture)); ?>" style="border-radius: 50%;"
                                    alt="Name" height="50" width='50'>
                                <!-- ============================================= Name SiteTitle ============================================= -->
                                <?php if(isset(Setting()->Name)): ?>
                                    <span class="d-none d-md-inline ml-1"><?php echo e(Setting()->Name); ?></span>
                                <?php else: ?>
                                <?php endif; ?>
                                <!-- ============================================= Name SiteTitle ============================================= -->
                            </div>
                        </a>

                        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                            <i class="icon-material-outline-arrow-back"></i>
                        </a>
                    </nav><br><br>
                </div>
                <div class="nav-wrapper">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <!-- ============================================= nav admin Site ============================================= -->
                            <a class="nav-link active" href="<?php echo e(url('admin')); ?>">
                                <i class="icon-material-outline-dashboard"></i>
                                <span>Tableau de bord</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('dashboard/dashboardUsers')); ?>">
                                <i class="icon-feather-user"></i>
                                <span>Utilisateurs</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(url('dashboard/dashboardRoles')); ?>">
                                <i class="icon-feather-lock"></i>
                                <span>Rôles</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(url('dashboard/dashboardCategores')); ?>">
                                <i class="icon-feather-archive"></i>
                                <span>Catégories</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(url('dashboard/dashboardPosts')); ?>">
                                <i class="icon-feather-file-text"></i>
                                <span>Posts</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(url('dashboard/dashboardCauses')); ?>">
                                <i class="icon-material-outline-assignment"></i>
                                <span>Projets</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(url('dashboard/dashboardEvents')); ?>">
                                <i class="icon-feather-file-text"></i>
                                <span>Événements</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(url('dashboard/dashboardGalleres')); ?>">
                                <i class="icon-feather-file-text"></i>
                                <span>Publicité</span>
                            </a>
                        </li>
                        <!-- ============================================= nav admin Site ============================================= -->
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo e(url('dashboard/dashboardMessages')); ?>">
                                <i class="icon-feather-file-text"></i>
                                <span>Messages</span>
                            </a>
                        </li>

                        <!-- ============================================= nav admin Site ============================================= -->
                        
                        <!-- ============================================= nav admin Site ============================================= -->
                        
                        <!-- ============================================= nav admin Site ============================================= -->
                        
                        <!-- ============================================= nav admin Site ============================================= -->
                    </ul>
                </div>
            </aside>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    <nav class="navbar d-flex justify-content-end navbar-light flex-md-nowrap p-0">
                        <div class="mx-auto" style="width: 200px;"> <button type="button"
                                class="btn btn-primary">Aller vers le blog</button>
                        </div>
                        <ul class="navbar-nav border-left flex-row ">

                            <li class="nav-item border-right dropdown notifications">
                                <!-- ============================================= Name SiteTitle ============================================= -->
                                <a class="nav-link nav-link-icon text-center" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                                    role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                        style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    <!-- ============================================= Name SiteTitle ============================================= -->
                                    <div class="nav-link-icon__wrapper">
                                        <i class="icon-feather-log-out"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <!-- ============================================= Name SiteTitle ============================================= -->
                                    <img class="user-avatar rounded-circle20 mr-2" src="<?php echo asset(Auth::user()->avatar); ?>"
                                        alt="Admin Avatar" height="40px" width="40px">
                                    <span class="d-none d-md-inline-block mr-2"><?php echo e(Auth::user()->name); ?></span>
                                </a>
                                <!-- ============================================= Name SiteTitle ============================================= -->
                                <div class="dropdown-menu dropdown-menu-small">
                                    <!-- ============================================= Name SiteTitle ============================================= -->
                                    <a class="dropdown-item"
                                        href="<?php echo e(url('dashboard/dashboardUsers')); ?>/<?php echo e(Auth::user()->name); ?>/edit">
                                        <i class="icon-feather-edit"></i> Editer le profil</a>
                                    
                                    <!-- ============================================= Name SiteTitle ============================================= -->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <!-- ============================================= Name SiteTitle ============================================= -->
                                        <i class=" icon-feather-log-out text-danger"></i>Se déconnecter
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                        style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    <!-- ============================================= Name SiteTitle ============================================= -->
                                </div>
                            </li>
                        </ul>
                        <nav class="nav">
                            <!-- ============================================= Name SiteTitle ============================================= -->
                            <a href="#"
                                class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
                                data-toggle="collapse" data-target=".header-navbar" aria-expanded="false"
                                aria-controls="header-navbar">
                                <i class="icon-material-outline-dashboard"></i>
                                <!-- ============================================= Name SiteTitle ============================================= -->
                            </a>
                        </nav>
                    </nav>
                </div>
                <!-- / .main-navbar -->
                <!-- ============================================= dashboard content SiteTitle ============================================= -->
                <?php echo $__env->yieldContent('dashboardcontent'); ?>
                <!-- ============================================= dashboard content SiteTitle ============================================= -->
                <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                    <span class="copyright ml-auto my-auto mr-2">Copyright © 2022
                        <a href="https://www.innov-is-afrique.com/" target="_blank" rel="nofollow">INNOV GROUP</a>
                        <?php echo e(Setting()->SiteTitle); ?>

                    </span>
                </footer>
                <!-- ============================================= dashboard content SiteTitle ============================================= -->
            </main>
        </div>
    </div>
    <!-- Include external JS libs. -->
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/jquery-3.3.1.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/bootstrap-tagsinput.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/popper.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/bootstrap.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/Chart.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/aragon.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/jquery.sharrre.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/extras.1.1.0.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/scripts/aragon-dashboards.1.1.0.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js">
    </script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/froala_editor.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/align.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/code_beautifier.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/code_view.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/colors.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/draggable.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/emoticons.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/font_size.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/font_family.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/image.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/file.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/image_manager.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/line_breaker.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/link.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/lists.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/paragraph_format.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/paragraph_style.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/video.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/table.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/url.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/entities.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/char_counter.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/inline_style.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/save.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/fullscreen.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script type="text/javascript" src="<?php echo e(asset('dashboardassets/froala/js/plugins/quote.min.js')); ?>"></script>
    <!-- ============================================= dashboard javascript ============================================= -->
    <script>
        $(function() {
            $('#edit').froalaEditor({
                theme: 'dark'
            })
        });
    </script>
    <!-- ============================================= dashboard javascript ============================================= -->

</body>

</html>
<?php /**PATH C:\wamp64\www\projects\CIBLE_SITE_WEB\resources\views/dashboard/layouts/postmain.blade.php ENDPATH**/ ?>