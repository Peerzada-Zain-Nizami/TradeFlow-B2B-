<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name')); ?></title>
        <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset(('css/admin_dashboard.css'))); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset(('css/common/message_notifications.css'))); ?>">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
        <style>
            .quotation_modal_main
            {
                overflow: scroll;
            }
            .quotation_modal_white
            {
                padding-top:  300px;
                padding-bottom: 100px;
            }
            .profile_image
            {
                width: 150px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset(('css/common/message_notifications.css'))); ?>">

        
        <?php echo $__env->yieldPushContent('styles'); ?>

        <link rel="stylesheet" type="text/css" href="<?php echo e(asset(('common'))); ?>/css/custom.css">
        <?php echo $__env->yieldContent('css'); ?>

    </head>
    <body class="bg-gray-100">
        <div class="overlay h-screen w-full left-0 top-0 bg-black bg-opacity-50 z-10 hidden"></div>

        <?php echo $__env->make('components.top-nav-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- strat wrapper -->
        <div class="h-screen flex flex-row flex-wrap">

            <?php echo $__env->make('components.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- strat content -->
            <div class="bg-gray-100 flex-1 p-6 md:mt-16 large-table">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Session::has('message')): ?>
                    <div class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-close mb-5  w-full xl:w-2/4">
                        <button class="alert-btn-close">
                            <i class="fad fa-times"></i>
                        </button>
                        <span><?php echo e(Session::get('message')); ?></span>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
                    <div class="alert alert-error alert-close mb-5 grid grid-rows-2">
                        <div class="col-span-12">
                            <button class="alert-btn-close float-right">
                                <i class="fad fa-times"></i>
                            </button>

                        </div>
                        <ul>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <div class="alert alert-error alert-close mb-5  w-full xl:w-2/4 mr-3 hidden">
                  <button class="error-btn-close">
                      <i class="far fa-times"></i>
                  </button>
                  <span id="error_message"></span>
              </div>
              <div class="alert alert-success alert-close mb-5  w-full xl:w-2/4 mr-3 hidden">
                  <button class="error-btn-close">
                      <i class="far fa-times"></i>
                  </button>
                  <span id="success_message"></span>
              </div>

                <?php echo $__env->yieldContent('page'); ?>

                <?php echo $__env->yieldContent('modals'); ?>

            </div>
            <!-- end content -->
        </div>
        <!-- end wrapper -->
        <script>
            var user_role = '<?php echo e(Auth::user()->getRoleNames()); ?>';
            var base_url = '<?php echo e(config('app.url')); ?>';
            var user_id = '<?php echo e(Auth::user()->id); ?>';
            var user_type = '<?php echo e(Session::get('user_type')); ?>';
        </script>
        <script type="text/javascript" src="<?php echo e(asset(('/js/app.js'))); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset(('js/admin_dashboard.js'))); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset(('js/components/chat_notifications.js'))); ?>"></script>
        
        <?php echo $__env->yieldPushContent('scripts'); ?>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- Dropify -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
        <script src="<?php echo e(asset(('common'))); ?>/js/custom.js"></script>
        <script>
            
            var data = <?php echo json_encode(session()->getOldInput()) ?>;
            mapDataToFields(data);

            startSelect2();
            startDropify();
        </script>
        
        <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>
<?php /**PATH D:\Xampp\htdocs\AlahdeenB2b-main\AlahdeenB2b-main\resources\views/layouts/master.blade.php ENDPATH**/ ?>