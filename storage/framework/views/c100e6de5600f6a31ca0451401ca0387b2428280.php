<?php $__env->startSection('content'); ?>
    <!-- ============================================================= Content Start ============================================================= -->
    <!--================ start banner Area =================-->
    <section class="home-banner-area relative" id="home" data-parallax="scroll"
        data-image-src="https://d2homsd77vx6d2.cloudfront.net/cache/8/e/6a55b054bb47b611c290e3c55fe4af.jpg">
        <style type="text/css">
            /* Desktops and laptops ----------- */
            @media  only screen and (min-width : 1224px) {
                #h1 {
                    font-size: 180px;
                    font-family: Impact;
                }

                h4 {
                    font-size: 50px;
                    font-family: Impact;
                }
            }
        </style>
        <div class="overlay-bg overlay"></div>
        <div class="container">
            <div class="row fullscreen justify-content">
                <div class="banner-content col-lg-12" align="center" style="text-align:center">
                    <!-- ===============================  Home  ======================================== -->
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $message; ?>

                        </div>
                        <?php Session::forget('success'); ?>
                    <?php endif; ?>
                    <!-- ===============================  Home  ======================================== -->
                    <?php if($message = Session::get('error')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $message; ?>

                        </div>
                        <?php Session::forget('error'); ?>
                        <!-- ===============================  Home  ======================================== -->
                    <?php endif; ?>
                    <center>
                        <h1 id="h1">
                            <!-- ===============================  Home  ======================================== -->
                            
                            OTI DE DEMAIN

                        </h1>
                    </center>

                    <center>
                        <!-- ===============================  Home  ======================================== -->
                        <h4>
                            
                            TOUS UNIS POUR UN AVENIR MEILLEUR</h4>
                    </center>

                    <a href="<?php echo e(url('Contact')); ?>" class="primary-btn">
                        Nous joindre
                        <i class="ti-angle-right ml-1"></i>
                    </a>
                    <br>
                    <a href="<?php echo e(url('Causes')); ?>" class="primary-btn">
                        Faire un don
                        <i class="ti-angle-right ml-1"></i>
                    </a>
                    <!-- ===============================  Home  ======================================== -->
                </div>
            </div>

        </div>

    </section>

    <!--================ End banner Area =================-->
    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <!-- ===============================  Home  ======================================== -->
        <style type="text/css">
            .about_area .about_bg {
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url('<?php echo e(asset(Setting()->AboutPicture)); ?>');
                background-repeat: no-repeat;
                background-size: cover;
                background-size: cover;
                position: absolute;
                right: 0;
                top: 0;
                height: 100%;
                width: 50%;
                z-index: -1
            }
        </style>
        <!-- ===============================  Home  ======================================== -->
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="about_details lite_bg">
                        <!-- ===============================  Home  ======================================== -->
                        <h2><?php echo Setting()->title_about_gr; ?></h2>
                        <!-- ===============================  Home  ======================================== -->
                        <p class="mb-0">
                            <?php echo Setting()->content_about_gr; ?>

                        </p>
                        <!-- ===============================  Home  ======================================== -->
                        <a href="<?php echo e(url('about')); ?>" class="primary-btn mt-5">
                            Continuer la lecture
                            <i class="ti-angle-right ml-1"></i>
                        </a>
                        <!-- ===============================  Home  ======================================== -->
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
                    <div class="about_right">
                        <div class="video-inner justify-content-center align-items-center d-flex">
                            <a id="play-home-video" class="video-play-button" href="<?php echo Setting()->video; ?>">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_bg d-lg-block d-none"></div>
        </div>
    </section>
    <!--================ End About Area =================-->

    <!--================ Start Features Area =================-->
    

    <section class="features-area section-gap-top">
        <div class="container">

            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <h4 class="footer_title large_title"><img src="<?php echo e(asset(Setting()->LogoPicture)); ?>"
                                alt="Logo" width="150" height="150" style="border-radius: 50%;"></h4>
                        <!-- ===============================  Home  ======================================== -->
                        <h3>BAGOUDOU Yaliou</h3>
                        <h4 style="font-size: 20px; font-weight: bold; font-family: Arial; color: rgba(255, 17, 0, 0.921)">
                            Président</h4>
                        <!-- ===============================  Home  ======================================== -->
                        <p>Se réunir est un début, rester ensemble est un progrès, travailler ensemble est la réussite.</p>
                        <a href="https://www.facebook.com/yaliou.bagoudou.56" class="primary-btn2">Suivre maintenant</a>
                        <!-- ===============================  Home  ======================================== -->
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <h4 class="footer_title large_title"><img src="<?php echo e(asset(Setting()->LogoPicture)); ?>"
                                alt="Logo" width="150" height="150" style="border-radius: 50%;"></h4>
                        <!-- ===============================  Home  ======================================== -->
                        <h3>NAPO Abdoubaki</h3>
                        <h4 style="font-size: 20px; font-weight: bold; font-family: Arial; color: rgba(255, 17, 0, 0.921)">
                            Chargé de la communication</h4>
                        <!-- ===============================  Home  ======================================== -->
                        <p>Lorsque deux forces sont jointes, leur efficacité est double.</p>
                        <a href="https://www.facebook.com/napobaki14" class="primary-btn2">Suivre maintenant</a>
                        <!-- ===============================  Home  ======================================== -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <h4 class="footer_title large_title"><img src="<?php echo e(asset(Setting()->LogoPicture)); ?>"
                                alt="Logo" width="150" height="150" style="border-radius: 50%;"></h4>
                        <!-- ===============================  Home  ======================================== -->
                        <h3>SALIFOU Nouroudine</h3>
                        <h4 style="font-size: 20px; font-weight: bold; font-family: Arial; color: rgba(255, 17, 0, 0.921)">
                            Trésorier</h4>
                        <!-- ===============================  Home  ======================================== -->
                        <p>« Ce n’est pas le fait de porter le même maillot qui fait une équipe, c’est de transpirer
                            ensemble. »</p>
                        <a href="https://www.facebook.com/nouroudine.highness.9678" class="primary-btn2">Suivre
                            maintenant</a>
                        <!-- ===============================  Home  ======================================== -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">

                        <h4 class="footer_title large_title"><img src="<?php echo e(asset(Setting()->LogoPicture)); ?>"
                                alt="Logo" width="150" height="150" style="border-radius: 50%;"></h4>
                        <!-- ===============================  Home  ======================================== -->
                        <h3>MOUSSA Adamou</h3>
                        <h4 style="font-size: 20px; font-weight: bold; font-family: Arial; color: rgba(255, 17, 0, 0.921)">
                            Sécrétaire</h4>
                        <!-- ===============================  Home  ======================================== -->
                        <p>Le travail individuel gagne un match mais c'est l'esprit d'équipe qui permet de gagner la coupe du monde.</p>
                        <a href="https://www.facebook.com/adamou.moussa.100" class="primary-btn2">Suivre maintenant</a>
                        <!-- ===============================  Home  ======================================== -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Area =========================-->
    <!--================ Start Popular Causes Area =================-->
    <section class="popular-cause-area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <span> Dignité, opportunité, espoir </span>
                        <h2><span>Nos projets</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- ===============================  Home  ======================================== -->
                <?php $__currentLoopData = $Causes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Cause): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo url('Causes'); ?>/<?php echo $Cause->slug; ?>">
                        <div class="col-lg-4 col-md-6">
                            <div class="card single-popular-cause">
                                <div class="card-body">
                                    <figure>
                                        <img class="card-img-top img-fluid" src="<?php echo asset($Cause->image); ?>"
                                            alt="Card image cap">
                                    </figure>
                                    <div class="card_inner_body">
                                        <!--================ Start Popular Causes Area =================-->
                                        <?php if(isset($Cause->Category->title)): ?>
                                            <div class="tag"><?php echo e($Cause->Category->title); ?></div>
                                        <?php else: ?>
                                            <div class="tag">Aucune catégorie</div>
                                        <?php endif; ?>
                                        <!--================ Start Popular Causes Area =================-->
                                        <h4 class="card-title"><?php echo substr($Cause->Title_en, 0, 190); ?></h4>
                                        <div class="d-flex justify-content-between raised_goal">
                                            <p>Collectée: <?php echo $Cause->Raised; ?></p>
                                            <p><span>Objectif: <?php echo $Cause->Goal; ?></span></p>
                                            <!--================ Start Popular Causes Area =================-->
                                        </div>
                                        <div class="d-flex justify-content-between donation align-items-center">
                                            <a href="<?php echo url('Causes'); ?>/<?php echo $Cause->slug; ?>"
                                                class="primary-btn">Faire un don</a>
                                            <p><span class="ti-heart mr-1"></span> <?php echo $Cause->Donors; ?> donateurs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- ===============================  Home  ======================================== -->
            </div>
        </div>
    </section>
    <!--================ End Popular Causes Area =================-->

    <!--================ Start callto Area =================-->
    <section class="callto-area section-gap relative" data-parallax="scroll"
        data-image-src="<?php echo e(asset(Setting()->HomePicture)); ?>">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="top_text">Besoin de votre aide</p>
                    <div class="call-wrap mx-auto">
                        <h1>Bénévole recherché dans votre région</h1>
                        <p>Dans Notre propre vie, pour les éclairer, deux jours apparaissent qui sont secs pour la cause
                            principale la volaille elle-même
                            de cause principale volailles elles-mêmes sèches.</p>
                        <!-- ===============================  About  ======================================== -->
                        <a href="<?php echo e(route('register')); ?>" class="primary-btn mt-5">
                            S'inscrire
                            <i class="ti-angle-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End callto Area ===========================-->
    <!--================ Start Upcoming Event Area =================-->
    <section class="upcoming_event_area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Événements <span>à venir</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- ===============================  Home Event ======================================== -->
                <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6">
                        <div class="single_upcoming_event">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <a href="<?php echo url('Events'); ?>/<?php echo $Event->slug; ?>">
                                        <figure>
                                            <!--================ Start Popular Causes Area =================-->
                                            <img style='max-width: 100%; max-height: 100%' src="<?php echo asset($Event->image); ?>"
                                                alt="" height="200" width="400">
                                            
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content_wrapper">
                                        <h5 class="title">
                                            <!--================ Start Popular Causes Area =================-->
                                            <a
                                                href="<?php echo url('Events'); ?>/<?php echo $Event->slug; ?>"><?php echo substr($Event->Title_en, 0, 190); ?></a>
                                        </h5>
                                        <p>
                                            <!--================ Start Popular Causes Area =================-->
                                            <?php echo substr($Event->Content_en, 0, 60); ?>

                                        </p>
                                        <a href="<?php echo url('Events'); ?>/<?php echo $Event->slug; ?>"
                                            class="primary-btn2">Voir plus</a>
                                        <!--================ Start Popular Causes Area =================-->
                                        <div class="d-flex count_time justify-content-lg-start justify-content-center"
                                            id="clockdiv1">
                                            <div class="single_time">
                                                <h6><?php echo $Event->StartTime; ?></h6>
                                                <p>Date de début</p>
                                            </div>
                                            <div class="single_time">
                                                <h6><?php echo $Event->FinishTime; ?></h6>
                                                <p>Date de fin</p>
                                            </div>

                                        </div>
                                        <!--================ Start Popular Causes Area =================-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- ===============================  Home Event ======================================== -->
            </div>
        </div>
    </section>
    <!--================ End Upcoming Event Area =================-->
    <section >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Nos <span>partenaires</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <img src="<?php echo e(asset('assets/img/partener1.png')); ?>"
                alt="Logo" width="150" height="150">

                <img src="<?php echo e(asset('assets/img/partener2.png')); ?>"
                alt="Logo" width="150" height="150">
            </div>
        </div>
    </section>
    <br>
    <!--================ Start Home Blog Area =================-->
    <section class="blog-area section-gap-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="home-blog-left">
                        <h2>Dernières actualités
                           de notre blog</h2>
                        <p>
                            <!-- ===============================  Home Post ======================================== -->
                            <?php echo Setting()->content_blog_en; ?>

                        </p>
                        <a href="<?php echo e(url('Posts')); ?>" class="primary-btn2">Voir plus</a>
                    </div>
                </div>
                <!-- ===============================  Home Post ======================================== -->
                <?php $__currentLoopData = $Posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo url('Posts'); ?>/<?php echo $Post->slug; ?>">
                        <div class="col-lg-4 col-md-6 single-blog">
                            <div class="thumb">

                                <img class="img-fluid" src="<?php echo asset($Post->image); ?>" alt="<?php echo substr($Post->Title_en, 0, 190); ?>">
                            </div>
                            <div class="single-blog-info">
                                <p class="tag">
                                    <!-- ===============================  Home Post ======================================== -->
                                    <?php if(isset($Post->Category->title)): ?>
                                        <span><?php echo e($Post->Category->title); ?></span>
                                    <?php else: ?>
                                        <span>Aucune catégorie</span>
                                    <?php endif; ?>
                                    <!-- ===============================  Home Post ======================================== -->
                                    <span><?php echo e(date('M j, Y', strtotime($Post->created_at))); ?></span>
                                </p>
                                <!-- ===============================  Home Post ======================================== -->
                                <a href="<?php echo url('Posts'); ?>/<?php echo $Post->slug; ?>">
                                    <h4><?php echo substr($Post->Title_en, 0, 190); ?></h4>
                                </a>
                                <!-- ===============================  Home Post ======================================== -->
                                <div class="meta-bottom d-flex">
                                    <?php if(isset($Post->Comments)): ?>
                                        <a class="mr-3"><span
                                                class="ti-comments mr-2"></span><?php echo e(count($Post->Comments)); ?>

                                            commentaires</a>
                                    <?php else: ?>
                                        <a class="mr-3"><span class="ti-comments mr-2"></span> Aucun
                                            commentaire</a>
                                    <?php endif; ?>
                                    <a href="<?php echo url('Posts'); ?>/<?php echo $Post->slug; ?>"> <span
                                            class="ti-eye mr-2"></span> Voir plus</a>
                                </div>
                                <!-- ===============================  Home Post ======================================== -->
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--================ End Home Blog Area =================-->

    <!--================ Start Gallery Area =================-->
    <section class="instagram-area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>Notre galerie</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="instagram-slider owl-carousel">
            <!--================ End Gallery Area =================-->
            <?php $__currentLoopData = $Gallers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!--================ End Gallery Area =================-->
                <a href="<?php echo asset($Gallery->image); ?>" class="single-instagram d-block img-pop-up">
                    <div class="instagram-img">
                        <!--================ End Gallery Area =================-->
                        <img src="<?php echo asset($Gallery->image); ?>" style='max-width: 100%; max-height: 100%' height="250">
                        <!--================ End Gallery Area =================-->
                        <div class="instagram-text">
                            <i class=" icon-material-outline-add"></i>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--================ End Gallery Area =================-->
        </div>
    </section>
    <!--================ End Gallery Area =================-->
    <!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('French.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/english/home.blade.php ENDPATH**/ ?>