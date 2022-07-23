<?php $__env->startSection('dashboardcontent'); ?>
    <!-- ================================ links Causes Content Start ========================================================================= -->
    <div class="main-content-container container-fluid px-4">

        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Cause</span>
                <h3 class="page-title"><i class="icon-material-outline-assignment"></i> Modifier une cause</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <!-- Add New Cause Form -->
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <!-- ================================ dashboard Causes update ========================================================================= -->
                        <form class="add-new-Cause" action="<?php echo e(route('dashboardCauses.update', $Cause->slug)); ?>"
                            method="POST" role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <!-- ================================ dashboard Causes update ========================================================================= -->
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Titre" name="Title_en"
                                value="<?php echo e($Cause->Title_en); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Description"
                                name="slug" value="<?php echo e($Cause->slug); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Recolté" name="Raised"
                                value="<?php echo e($Cause->Raised); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Objectifs" name="Goal"
                                value="<?php echo e($Cause->Goal); ?>">
                            <input class="form-control form-control-lg mb-3" type="text" placeholder="Donateurs"
                                name="Donors" value="<?php echo e($Cause->Donors); ?>">
                            <!-- ================================ dashboard Causes update ========================================================================= -->
                            <div class="form-control form-control-lg mb-3">
                                <label for="Category">Catégorie</label>
                                <select class="custom-select" name="category_id">
                                    <?php if(isset($Cause->Category->title)): ?>
                                        <option value="<?php echo e($Cause->category_id); ?>" selected="">
                                            <?php echo e($Cause->Category->title); ?></option>
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
                            </div>
                            <!-- ================================ dashboard Causes update ========================================================================= -->
                            <textarea value="<?php echo e($Cause->Content_en); ?>" class="form-control form-control-lg mb-3" type="text" name="Content_en"
                                rows="15">
                <?php echo e($Cause->Content_en); ?>

               </textarea>
                            <!-- ================================ dashboard Causes update ========================================================================= -->
                            <div class="row mt-3">
                                <div class="col-2">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        
                                    </div>
                                    <!-- ================================ dashboard Causes update ========================================================================= -->
                                    
                                    <div class="tab-content" id="v-pills-tabContent">
                                        
                                        <!-- ================================ dashboard Causes update ========================================================================= -->
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- / Add New Cause Form -->
            </div>
            <div class="col-lg-3 col-md-12">
                <!-- Cause Overview -->
                <!-- ================================ dashboard Causes update ========================================================================= -->
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
                                <a class="btn btn-sm btn-outline-accent" href="<?php echo e(route('dashboardCauses.index')); ?>"><i
                                        class="icon-material-outline-description"></i> Causes</a>

                                <button class="btn btn-sm btn-accent ml-auto" type="submit">
                                    <i class="icon-feather-file-plus"></i> Publier</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ================================ dashboard Causes update ========================================================================= -->
                <!-- / Cause Overview -->
                <!-- Cause Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0"><i class="icon-line-awesome-image"></i>Image</h6>
                    </div>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <div class="edit-post-details__avatar m-auto">
                                <img id="viewer" src="<?php echo asset($Cause->image); ?>" alt="Cause image">
                                <label class="edit-post-details__avatar__change">
                                    <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                                    <input type="file" name="image" hidden="" value="<?php echo e($Cause->image); ?>" id="customFileEg1">
                                </label>
                            </div>
                        </ul>
                        </form>
                    </div>
                    <!-- ================================ dashboard Causes update ========================================================================= -->
                </div>
                <!-- / Cause Overview -->
            </div>
        </div>
    </div>
    <!-- ================================ links Causes Content Start ========================================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/dashboard/dashboardCauses/edit.blade.php ENDPATH**/ ?>