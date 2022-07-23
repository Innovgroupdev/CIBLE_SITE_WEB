<?php $__env->startSection('dashboardcontent'); ?>
    <!-- ====================== links Posts Content Start  ======================================================================== -->
    <!-- / .main-navbar -->
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="icon-material-outline-check mx-2"></i>
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>
    <!-- ====================== links Posts Content Start  ======================================================================== -->
    <?php if($message = Session::get('Delete')): ?>
        <div class="alert alert-royal-blue alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <i class="icon-material-outline-check mx-2"></i>
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>
    <!-- ====================== links Posts Content Start  ======================================================================== -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Vue d'ensemble</span>
                <h3 class="page-title"><i class=" icon-feather-file-text"></i> Posts
                    <a href="<?php echo e(route('dashboardPosts.create')); ?>" class="mb-2 btn btn-success mr-2"><i
                            class="icon-material-outline-add-circle-outline"></i> Ajouter un post</a>
                </h3>
            </div>
        </div>
        <!-- ====================== links Posts Content Start  ======================================================================== -->
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card card-small lo-stats h-100">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Derniers posts</h6>
                        <div class="block-handle"></div>
                    </div>
                    <div class="card-body p-0">
                        <div class="container-fluid px-0">
                            <table class="table mb-0">
                                <thead class="py-2 bg-light text-semibold border-bottom">
                                    <tr>
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th class="text-center">Catégorie</th>
                                        <th class="text-center">Auteur</th>
                                        
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- ====================== links Posts Content Start  ======================================================================== -->
                                    <?php $__currentLoopData = $Posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="lo-stats__image">
                                                <img class="border rounded" src="<?php echo asset($Post->image); ?>">
                                            </td>
                                            <td class="lo-stats__order-details">
                                                <span><?php echo substr($Post->Title_en, 0, 190); ?></span>
                                                <span><?php echo e(date('M j, Y', strtotime($Post->created_at))); ?></span>
                                            </td>
                                            <td class="lo-stats__status">
                                                <div class="d-table mx-auto">
                                                    <!-- ====================== links Posts Content Start  ================================= -->
                                                    <?php if(isset($Post->Category->title)): ?>
                                                        <span
                                                            class="badge badge-pill badge-success"><?php echo e($Post->Category->title); ?></span>
                                                    <?php else: ?>
                                                        <span>Aucune catégorie</span>
                                                    <?php endif; ?>
                                                    <!-- ====================== links Posts Content Start  ================================= -->
                                                </div>
                                            </td>
                                            <td class="lo-stats__items text-center">
                                                <!-- ====================== links Posts Content Start  ================================= -->
                                                <?php if(isset($Post->User->name)): ?>
                                                    <?php echo e($Post->User->name); ?>

                                                <?php else: ?>
                                                    <span>Aucun utilisateur</span>
                                                <?php endif; ?>
                                                <!-- ====================== links Posts Content Start  ================================= -->
                                            </td>
                                            
                                            </td>
                                            <td class="lo-stats__actions">
                                                <div class="btn-group d-table ml-auto" role="group"
                                                    aria-label="Basic example">
                                                    <a href="<?php echo e(URL::to('dashboard/dashboardPosts')); ?>/<?php echo e($Post->slug); ?>/edit"
                                                        class="mb-2 btn btn-sm btn-primary">
                                                        <i class="icon-feather-edit-2"></i> Editer</a>
                                                    &nbsp
                                                    <form action="<?php echo e(route('dashboardPosts.destroy', $Post->id)); ?>"
                                                        method="POST" files="true" style="display: inline-block;">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button class="mb-2 btn btn-sm btn-danger" type="submit"><i
                                                                class="icon-material-outline-delete"></i> Supprimer</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ====================== links Posts Content Start  ================================= -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer border-top">
                        <div class="row">
                            <div class="col">
                                <!-- ====================== links Posts Content Start  ================================= -->
                                <?php echo $Posts->links(); ?>

                                <!-- ====================== links Posts Content Start  ================================= -->
                            </div>
                            <div class="col text-right view-report">
                                <!-- ====================== links Posts Content Start  ================================= -->
                                <?php if(COUNT($Posts) != null): ?>
                                    <a>Afficher 10 à <?php echo e(COUNT($Posts)); ?> de <?php echo e(COUNT($Posts)); ?> posts</a>
                                <?php else: ?>
                                    <a>Afficher 10 à 0 de 0 posts</a>
                                <?php endif; ?>
                                <!-- ====================== links Posts Content Start  ================================= -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        <!-- ====================== links Posts Content Start  ======================================================================== -->
        <!-- End Default Dark Table -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/dashboard/dashboardPosts/index.blade.php ENDPATH**/ ?>