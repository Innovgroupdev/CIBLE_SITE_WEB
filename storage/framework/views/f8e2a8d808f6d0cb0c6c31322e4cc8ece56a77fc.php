<?php $__env->startSection('dashboardcontent'); ?>
    <!-- ================================ links Events Content Start ========================================================================= -->
    <div class="main-content-container container-fluid px-4" id="editor">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Evènement</span>
                <h3 class="page-title"><i class="icon-line-awesome-tags"></i> Ajout d'un évènement</h3>
            </div>
        </div>
        <!-- ================================ links Events Content Start ========================================================================= -->
        <!-- End Page Header -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div id="form-container" class="card-body">
                        <!-- ================================ links Events Content Start ========================================================================= -->
                        <form action="<?php echo e(route('dashboardEvents.store')); ?>" method="POST" role="form"
                            enctype="multipart/form-data" class="add-new-post">
                            <?php echo csrf_field(); ?>
                            <!-- ================================ links Events Content Start ========================================================================= -->
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre"
                                name="Title_en">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Description"
                                name="slug">
                            

                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Lieu" name="Address">
                            <input class="form-control form-control-lg mb-3" type="date" placeholder="Date de début"
                                name="StartTime">
                            <input class="form-control form-control-lg mb-3" type="date" placeholder="Date de fin"
                                name="FinishTime">
                            <!-- ================================ links Events Content Start ========================================================================= -->
                            <textarea class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="10"></textarea>
                            <!-- ================================ links Events Content Start ========================================================================= -->
                            <div class="row mt-3">
                                <div class="col-2">
                                    <!-- ================================ links Events Content Start ========================================================================= -->
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        
                                    </div>
                                </div>
                                <!-- ================================ links Events Content Start ========================================================================= -->
                                <div class="col-10">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        
                                        <!-- ================================ links Events Content Start ========================================================================= -->
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- / Add New Post Form -->
            </div>
            <!-- ================================ links Events Content Start ========================================================================= -->
            <div class="col-lg-3 col-md-12">
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Actions</h6>
                    </div>
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
                            <li class="list-group-item d-flex px-3">
                                <a class="btn btn-sm btn-outline-accent" href="<?php echo e(route('dashboardEvents.index')); ?>"><i
                                        class="icon-line-awesome-tags"></i> Événements </a>
                                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                                    <i class="icon-feather-file-plus"></i> Publier</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ================================ links Events Content Start ========================================================================= -->
                <!-- / Post Overview -->
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0"><i class="icon-line-awesome-image"></i> Image</h6>
                    </div>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <div class="edit-post-details__avatar m-auto">
                                <img id="viewer" src="<?php echo e(asset('dashboardassets/images/content-management/cover.png')); ?>"
                                    alt="Event Avatar">
                                <label class="edit-post-details__avatar__change">
                                    <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                                    <input type="file" name="image" hidden="" id="customFileEg1">
                                </label>
                            </div>
                        </ul>
                        </form>
                    </div>
                    <!-- ================================ links Events Content Start ========================================================================= -->
                </div>
                <!-- / Post Overview -->
            </div>
        </div>
    </div>
    <!-- ================================ links Events Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/dashboard/dashboardEvents/create.blade.php ENDPATH**/ ?>