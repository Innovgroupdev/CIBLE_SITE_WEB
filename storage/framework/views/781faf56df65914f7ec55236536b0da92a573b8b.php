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
            <div class="row  align-items-center banner-content">
                <div class="col-lg-5">
                    <h1 class="text-white">Nos projets</h1>
                    <p>Mettre en œuvre des programmes durables qui améliorent l'accès mondial à l'investissement et aux
                        opportunités.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Popular Causes Area =================-->

    <section class="popular-cause-area section-gap-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="section-title">
                        <h2><span>Projets</span> populaires</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--================ Start Popular Causes Area =================-->
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
                <!--================ Start Popular Causes Area =================-->
                <?php echo $Causes->links(); ?>

                <!--================ Start Popular Causes Area =================-->
            </div>
        </div>
    </section>
   
    <!-- ============================================================= Content end   ============================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('French.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/French/Causes/index.blade.php ENDPATH**/ ?>