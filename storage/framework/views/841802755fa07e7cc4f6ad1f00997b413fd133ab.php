

<?php $__env->startSection('dashboardcontent'); ?>
    <!-- ================================ links Categores Content Start ========================================================================= -->
    <div class="main-content-container container-fluid px-4">

        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Catégories</span>
                <h3 class="page-title"><i class="icon-line-awesome-align-justify"></i> Catégories</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <form class="add-new-post" action="<?php echo e(route('dashboardCategores.update', $Category->slug)); ?>"
                            method="POST" role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input class="form-control form-control-lg mb-3" type="text"
                                placeholder="Numéro d'ordre (juste des chiffres)" name="order"
                                value="<?php echo e($Category->order); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre" name="title"
                                value="<?php echo e($Category->title); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Description"
                                name="slug" value="<?php echo e($Category->slug); ?>">
                            <select class="custom-select" name="color">
                                <option value="<?php echo e($Category->color); ?>" selected=""><?php echo e($Category->color); ?></option>
                                <option value="primary" class="rounded" style="color: #007bff">Blue</option>
                                <option value="dark" class="rounded" style="color: #16181b">Noire</option>
                                <option value="success" class="rounded" style="color: #17c671">Verte</option>
                                <option value="info" class="rounded" style="color: #aa3c40">Rouge</option>
                                <option value="warning" class="rounded" style="color: #ffb400">Jaune</option>
                            </select>
                    </div>
                </div>
                <!-- / Add New Post Form -->
            </div>
            <div class="col-lg-3 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Actions</h6>
                    </div>
                    <!-- ================================ dashboard Categores store ====================================== -->
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <span class="d-flex mb-2">
                                    <i class="icon-line-awesome-flag mr-1"></i>
                                    <strong class="mr-1">Statut:</strong> Ouvert
                                </span>
                                <span class="d-flex mb-2">
                                    <i class="icon-material-outline-visibility mr-1"></i>
                                    <strong class="mr-1">Visibilité:</strong>
                                    <strong class="text-success">Publique</strong>
                                </span>
                                
                            </li>
                            <!-- ================================ dashboard Categores store ====================================== -->
                            <li class="list-group-item d-flex px-3">
                                <a href="<?php echo e(url('dashboard/dashboardCategores')); ?>"
                                    class="btn btn-sm btn-outline-accent"><i class="icon-line-awesome-align-justify"></i>
                                    Catégories</a>
                                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                                    <i class="icon-line-awesome-align-justify"></i> Publier</button>
                            </li>
                            <!-- ================================ dashboard Categores store ====================================== -->
                        </ul>
                    </div>
                </div>
                <!-- / Post Overview -->
            </div>
        </div>
    </div>
    <!-- ================================ links Categores Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\CIBLE_SITE_WEB\resources\views/dashboard/dashboardCategores/edit.blade.php ENDPATH**/ ?>