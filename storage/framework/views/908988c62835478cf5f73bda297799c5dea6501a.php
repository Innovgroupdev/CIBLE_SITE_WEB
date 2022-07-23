<?php $__env->startSection('content'); ?>
<!-- ============================================================= Content Start ============================================================= -->
    <!--================ Start top-section Area =================-->
    <style type="text/css">
        .banner-area{background:url('<?php echo e(asset(Setting()->HomePicture)); ?>') no-repeat;background-size:cover}
    </style>
    <!-- ===============================  About  ======================================== -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">À propos de nous</h1>
                    <!-- ===============================  About  ======================================== -->
                    <p><?php echo Setting()->about_gr; ?></p>
                    <!-- ===============================  About  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <style type="text/css">
            .about_area .about_bg{
                background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('<?php echo e(asset(Setting()->AboutPicture)); ?>');background-repeat:no-repeat;background-size:cover;
                background-size:cover;
                position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
        </style>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-5">
                    <div class="about_details lite_bg">
                        <!-- ===============================  About  ======================================== -->
                        <h2><?php echo Setting()->title_about_gr; ?></h2>
                        <!-- ===============================  About  ======================================== -->
                        <p class="mb-0">
                            <?php echo Setting()->content_about_gr; ?>

                        </p>
                        <!-- ===============================  About  ======================================== -->
                        <a href="<?php echo e(url('about')); ?>" class="primary-btn mt-5">
                            Continuer la lecture
                            <i class="ti-angle-right ml-1"></i>
                        </a>
                        <!-- ===============================  About  ======================================== -->
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
                    <div class="about_right">
                        <div class="video-inner justify-content-center align-items-center d-flex">
                            <!-- ===============================  About  ======================================== -->
                            <a id="play-home-video" class="video-play-button" href="<?php echo Setting()->video; ?>">
                                <span></span>
                            </a>
                            <!-- ===============================  About  ======================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_bg d-lg-block d-none"></div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start callto Area =================-->
    <section class="callto-area section-gap relative" data-parallax="scroll" data-image-src="<?php echo e(asset(Setting()->HomePicture)); ?>">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="top_text">Besoin de votre aide</p>
                    <div class="call-wrap mx-auto">
                        <h1>Bénévole recherché dans votre région</h1>
                        <p>Dans Notre propre vie, pour les éclairer, deux jours apparaissent qui sont secs pour la cause principale la volaille elle-même
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
    <!--================ End callto Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('French.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/French/about.blade.php ENDPATH**/ ?>