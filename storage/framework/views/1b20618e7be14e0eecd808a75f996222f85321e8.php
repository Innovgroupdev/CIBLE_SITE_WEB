<?php $__env->startSection('dashboardcontent'); ?>
    <!-- ====================== links Posts Content Start store =============================================== -->
    <div class="main-content-container container-fluid px-4" id="editor">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Post de blog</span>
                <h3 class="page-title"><i class=" icon-feather-file-text"></i> Ajouter un post</h3>
            </div>
        </div>
        <!-- ====================== links Posts Content Start store =============================================== -->
        <!-- End Page Header -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div id="form-container" class="card-body">
                        <!-- ====================== links Posts Content Start store =============================================== -->
                        <form action="<?php echo e(route('dashboardPosts.store')); ?>" method="POST" role="form"
                            enctype="multipart/form-data" class="add-new-post">
                            <?php echo csrf_field(); ?>
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre"
                                name="Title_en">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Description"
                                name="slug">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre SEO"
                                name="seo_title">
                            <div class="form-control form-control-lg mb-3">
                                <label for="displayEmail">Auteur</label>
                                <select class="custom-select" name="author_id">
                                    <!-- ====================== links Posts Content Start store =============================================== -->
                                    <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($User->id); ?>"><?php echo e($User->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ====================== links Posts Content Start store =============================================== -->
                                </select>
                            </div>
                            <div class="form-control form-control-lg mb-3">
                                <label for="Category">Catégorie du post</label>
                                <select class="custom-select" name="category_id">
                                    <!-- ====================== links Posts Content Start store =============================================== -->
                                    <?php $__currentLoopData = $Categores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ====================== links Posts Content Start store =============================================== -->
                                </select>
                            </div>
                            <textarea id='edit' name="body_en"></textarea>
                            <!-- ====================== links Posts Content Start store =============================================== -->
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- ====================== links Posts Content Start store =============================================== -->
                <!-- / Add New Post Form -->
            </div>
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
                                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                                    <i class="icon-feather-file-plus"></i> Publier</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ====================== links Posts Content Start store =============================================== -->
                <!-- / Post Overview -->
                <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0"><i class="icon-feather-rss"></i> Sponsorisé</h6>
                    </div>
                    <!-- ====================== links Posts Content Start store =============================================== -->
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-3 pb-2">
                                <div class="custom-control custom-checkbox mb-1">
                                    <input type="checkbox" class="custom-control-input" id="featured" name="Sponsorisé">
                                    <label class="custom-control-label" for="featured">Sponsorisé </label>
                                </div>
                            </li>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="excerpt" aria-label="excerpt"
                                    aria-describedby="basic-addon2" hidden='true' name="excerpt">
                            </div>

                            <li class="list-group-item d-flex px-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Meta description"
                                        aria-label="meta_description" aria-describedby="basic-addon2"
                                        name="meta_description">
                                </div>
                            </li>
                            <li class="list-group-item d-flex px-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Mots clés"
                                        aria-label="meta_keywords" aria-describedby="basic-addon2" name="meta_keywords">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ====================== links Posts Content Start store =============================================== -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0"><i class="icon-line-awesome-image"></i> Image</h6>
                    </div>
                    <!-- ====================== links Posts Content Start store =============================================== -->
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <div class="edit-post-details__avatar m-auto">
                                <img id="viewer2" src="<?php echo e(asset('dashboardassets/images/content-management/cover.png')); ?>"
                                    alt="User Avatar">
                                <label class="edit-post-details__avatar__change">
                                    <i class="material-icons  icon-material-outline-add-a-photo mr-1"></i>
                                    <input type="file" name="image" hidden="" id="customFileEg2">
                                </label>
                            </div>
                        </ul>
                        </form>
                        <!-- ====================== links Posts Content Start store =============================================== -->
                    </div>
                </div>
                <!-- / Post Overview -->
            </div>
        </div>
    </div>
    <!-- ====================== links Posts Content Start store =============================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.postmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/dashboard/dashboardPosts/create.blade.php ENDPATH**/ ?>