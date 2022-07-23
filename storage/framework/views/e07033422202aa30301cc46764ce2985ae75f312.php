<?php $__env->startSection('content'); ?>
    <!-- ============================================================= Content Start ============================================================= -->
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo asset(Setting()->HomePicture); ?>');">
            <div class="wrap-login100">
                <!-- ========================== Content form =============================== -->
                <form method="POST" action="<?php echo e(route('register')); ?>" class="login100-form">
                    <?php echo csrf_field(); ?>
                    <span class="login100-form-logo">

                        <a class="zmdi zmdi-landscape" href="<?php echo url('/'); ?>"><img
                                src="<?php echo e(asset(Setting()->LogoPicture)); ?>" style="border-radius: 50%;" alt="logo-image" height="96px" width="96px"></a>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Portail d'inscription
                    </span>

                    <div class="wrap-input100">
                        <input id="name" type="text" class="input100<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                            name="name" value="<?php echo e(old('name')); ?>" required autofocus placeholder="Pseudo">
                        <span class="focus-input100"></span>
                        <?php if($errors->has('name')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Adresse email">
                        <input id="email" type="email" class="input100<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                            name="email" value="<?php echo e(old('email')); ?>" required placeholder="Adresse email">
                        <span class="focus-input100"></span>
                        <?php if($errors->has('email')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Mot de passe">
                        <input id="password" type="password"
                            class="input100<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required
                            placeholder="Mot de passe">
                        <span class="focus-input100"></span>
                        <?php if($errors->has('password')): ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password">
                        <input id="password-confirm" type="password" name="Confirmer le mot de passe" required
                            placeholder="Confirmer le mot de passe" class="input100">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            S'inscrire
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================= Content Start ============================================================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Donne\PhpstormProjects\OTI de demain\charity\Charity\resources\views/auth/register.blade.php ENDPATH**/ ?>