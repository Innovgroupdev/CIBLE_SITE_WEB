<?php $__env->startSection('content'); ?>
    <!-- ============================================================= Content Start ============================================================= -->
    <style type="text/css">
        .banner-area {
            background: url('<?php echo e(asset($Event->image)); ?>') no-repeat;
            background-size: cover
        }
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!--================ Start Popular Event Area =================-->
                    <h1 class="text-white"><?php echo $Event->Title_en; ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->

    <!--================ Start Recent Event Area =================-->
    <section class="event_details section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!--================ Start Popular Event Area =================-->
                    <img src="<?php echo e(asset($Event->image)); ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="event_content mb-40">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="right_content">
                            <!--================ Start Popular Event Area =================-->
                            <h2><?php echo $Event->body_en; ?></h2>
                            <p>
                                <!--================ Start Popular Event Area =================-->
                                <?php echo $Event->Content_en; ?>

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-lg-0 mt-5">
                        <div class="left_content">
                            

                            <div class="mb-40">
                                <h4>
                                    <i class="icon-material-outline-add-location"></i>
                                    Lieu
                                </h4>
                                <!--================ Start Popular Event Area =================-->
                                <div class="ml-30"><?php echo $Event->Address; ?></div>
                            </div>

                            <div class="">
                                <h4>
                                    <i class=" icon-material-outline-access-time"></i>
                                    Date de début
                                </h4>
                                <div class="ml-30"><?php echo $Event->FinishTime; ?></div>
                                <h4> <i class=" icon-material-outline-access-time"></i>
                                    Date de fin
                                </h4>
                                <div class="ml-30"><?php echo $Event->StartTime; ?></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Recent Event Area =================-->
    <!--================ Start CTA Area =================-->
    <div class="cta-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <p class="top_text">Merci de tout coeur</p>
                    <h1>Contribuez à mon travail caritatif avec votre don. Merci de tout coeur.</h1>
                    <!--================ Start Popular Event Area =================-->
                    <a href="<?php echo url('Contact'); ?>" class="primary-btn">Faire un don</a>
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->
    <!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('French.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/english/Events/show.blade.php ENDPATH**/ ?>