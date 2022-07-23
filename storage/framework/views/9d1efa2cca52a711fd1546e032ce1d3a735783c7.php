<?php $__env->startSection('content'); ?>
    <!-- ============================================================= Content Start ============================================================= -->
    <!--================ start banner Area =================-->
    <style type="text/css">
        .banner-area {
            background: url('<?php echo e(asset(Setting()->HomePicture)); ?>') no-repeat;
            background-size: cover
        }
    </style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-lg-end align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">Nos événements</h1>
                    <p>Mettre en œuvre des programmes durables qui améliorent l'accès mondial à l'investissement et aux
                        opportunités.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Upcoming Event Area =================-->
    <section class="upcoming_event_area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2><span>Événements</span> à venir</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--================ Start Popular Causes Area =================-->
                <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6">
                        <div class="single_upcoming_event">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <figure>
                                        <!--================ Start Popular Causes Area =================-->
                                        <img style='max-width: 100%; max-height: 100%' src="<?php echo asset($Event->image); ?>" alt="" height="200" width="400">
                                        
                                    </figure>
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
                <!--================ Start Popular Causes Area =================-->
                <?php echo $Events->links(); ?>

                <!--================ Start Popular Causes Area =================-->
            </div>
        </div>
    </section>

    <div class="cta-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1>Contribuez à notre travail caritatif avec votre don. Merci de tout coeur.</h1>
                    <!--================ Start Popular Causes Area =================-->
                    <a href="<?php echo url('Causes'); ?>" class="primary-btn">Faire un don</a>
                    <!--================ Start Popular Causes Area =================-->
                </div>
            </div>
        </div>
    </div>
    <!--================ End CTA Area =================-->

    <!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('French.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/French/Events/index.blade.php ENDPATH**/ ?>