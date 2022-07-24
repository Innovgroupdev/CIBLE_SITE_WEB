

<?php $__env->startSection('dashboardcontent'); ?>
    <!-- ====================== links Messages Content Start store =============================================== -->
    <?php if($message = Session::get('Delete')): ?>
        <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="icon-material-outline-check mx-2"></i>
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>
    <!-- ====================== links Messages Content Start store =============================================== -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Messages</span>
            </div>
            <!-- ====================== links Messages Content Start store =============================================== -->
        </div>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card card-small lo-stats h-100">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Derniers messages</h6>
                        <div class="block-handle"></div>
                    </div>
                    <div class="card-body p-0">
                        <div class="container-fluid px-0 ">
                            <!-- ====================== links Messages Content Start store =============================================== -->
                            <?php $__currentLoopData = $Messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-12 mt-4">
                                    <div class="card card-small card-post mb-4">
                                        <div class="card-body">
                                            <h5 class="card-title">Sujet <?php echo $Message->subject; ?></h5>
                                            <p class="card-text text-muted">Contenu <?php echo $Message->Content; ?></p>
                                        </div>
                                        <div class="card-footer border-top d-flex">
                                            <div class="card-post__author d-flex">
                                                <div class="d-flex flex-column justify-content-center ml-3">
                                                    <span class="card-post__author-name">Nom <?php echo $Message->name; ?></span>
                                                    <small
                                                        class="text-muted"><?php echo e(date('M j, Y', strtotime($Message->created_at))); ?></small>
                                                </div>
                                            </div>
                                            <div class="my-auto ml-auto">
                                                <!-- ====================== links Messages Content Start store =============================================== -->
                                                <form action="<?php echo e(route('dashboardMessages.destroy', $Message->id)); ?>"
                                                    method="POST" files="true" style="display: inline-block;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button class="mb-2 btn btn-sm btn-danger" type="submit"><i
                                                            class="icon-material-outline-delete"></i> Supprimer</button>
                                                </form>
                                                <!-- ====================== links Messages Content Start store =============================================== -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- ====================== links Messages Content Start store =============================================== -->
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <div class="row">
                            <div class="col">
                                <!-- ====================== links Messages Content Start store =============================================== -->
                                <?php echo $Messages->links(); ?>

                                <!-- ====================== links Messages Content Start store =============================================== -->
                            </div>
                            <div class="col text-right view-report">
                                <!-- ====================== links Messages Content Start store =============================================== -->
                                <?php if(COUNT($Messages) != null): ?>
                                    <a>Afficher 10 à <?php echo e(COUNT($Messages)); ?> de <?php echo e(COUNT($Messages)); ?> Messages</a>
                                <?php else: ?>
                                    <a>Afficher 10 à 0 de 0 messages</a>
                                <?php endif; ?>
                                <!-- ====================== links Messages Content Start store =============================================== -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        <!-- ====================== links Messages Content Start store =============================================== -->
        <!-- End Default Dark Table -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\cible_stie_web\CIBLE_SITE_WEB\resources\views/dashboard/dashboardMessages/index.blade.php ENDPATH**/ ?>