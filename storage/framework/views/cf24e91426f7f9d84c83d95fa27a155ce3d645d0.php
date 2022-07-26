

<?php $__env->startSection('dashboardcontent'); ?>
    <!-- ====================== links Posts Content Start store =============================================== -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <!-- ====================== links Posts Content Start store =============================================== -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Post de blog</span>
                <h3 class="page-title"><i class=" icon-feather-file-text"></i> Editer un post</h3>
            </div>
        </div>
        <!-- ====================== links Posts Content Start store =============================================== -->
        <!-- End Page Header -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Add New Post Form -->
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <!-- ====================== links Posts Content Start store =============================================== -->
                        <form class="add-new-post" action="<?php echo e(route('dashboardPosts.update', $Post->slug)); ?>"
                            method="POST" role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <!-- ====================== links Posts Content Start store =============================================== -->
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre" name="Title_en"
                                value="<?php echo e($Post->Title_en); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Description"
                                name="slug" value="<?php echo e($Post->slug); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre SEO"
                                name="seo_title" value="<?php echo e($Post->seo_title); ?>">
                            <!-- ====================== links Posts Content Start store =============================================== -->
                            <div class="form-control form-control-lg mb-3">
                                <label for="displayEmail">Auteur</label>
                                <select class="custom-select" name="author_id">
                                    <!-- ====================== links Posts Content Start store =============================================== -->
                                    <?php if(isset($Post->User->name)): ?>
                                        <option value="<?php echo e($Post->author_id); ?>" selected=""><?php echo e($Post->User->name); ?>

                                        </option>
                                    <?php else: ?>
                                        <!-- ====================== links Posts Content Start store =============================================== -->
                                        <option value="1" selected="">Aucun utilisateur</option>
                                    <?php endif; ?>
                                    <!-- ====================== links Posts Content Start store =============================================== -->
                                    <?php if($Users !== null): ?>
                                        <?php $__currentLoopData = $Users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $User): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($User->id); ?>"><?php echo e($User->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <option value="1" selected="">Aucun utilisateur</option>
                                    <?php endif; ?>
                                </select>
                                <!-- ====================== links Posts Content Start store =============================================== -->
                            </div>
                            <!-- ====================== links Posts Content Start store =============================================== -->
                            <div class="form-control form-control-lg mb-3">
                                <label for="Category">Catégorie</label>
                                <select class="custom-select" name="category_id">
                                    <?php if(isset($Post->Category->title)): ?>
                                        <option value="<?php echo e($Post->category_id); ?>" selected="">
                                            <?php echo e($Post->Category->title); ?></option>
                                    <?php else: ?>
                                        <option value="1" selected="">Aucune catégorie</option>
                                    <?php endif; ?>
                                    <?php if($Categores !== null): ?>
                                        <?php $__currentLoopData = $Categores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($Category->id); ?>"><?php echo e($Category->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <option value="1" selected="">Aucune catégorie</option>
                                    <?php endif; ?>
                                </select>
                                <!-- ====================== links Posts Content Start store =============================================== -->
                            </div>
                            <textarea value="<?php echo e($Post->Title_en); ?>" class="form-control form-control-lg mb-3" type="text" name="body_en"
                                id='edit' rows="15"><?php echo e($Post->body_en); ?></textarea>
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        
                                    </div>
                                </div>
                                <!-- ====================== links Posts Content Start store =============================================== -->
                                <div class="col-10">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        
                                        <!-- ====================== links Posts Content Start store =============================================== -->
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- / Add New Post Form -->
            </div>
            <!-- ====================== links Posts Content Start store =============================================== -->
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
                                <button class="btn btn-sm btn-outline-accent">
                                    <i class="icon-material-outline-description"></i> Posts</button>
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
                        <h6 class="m-0"><i class="icon-line-awesome-image"></i> Image</h6>
                    </div>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <div class="edit-post-details__avatar m-auto">
                                <img id="viewer2" src="<?php echo asset($Post->image); ?>" alt="Post image">
                                <label class="edit-post-details__avatar__change">
                                    <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                                    <input type="file" name="image" hidden="" value="<?php echo e($Post->image); ?>"
                                        id="customFileEg2">
                                </label>
                            </div>
                        </ul>
                        </form>
                    </div>
                    <!-- ====================== links Posts Content Start store =============================================== -->
                </div>
                <!-- / Post Overview -->
            </div>
        </div>
    </div>
    <!-- ===================================================== links Posts Content Start store =============================================== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.postmain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\projects\CIBLE_SITE_WEB\resources\views/dashboard/dashboardPosts/edit.blade.php ENDPATH**/ ?>