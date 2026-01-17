<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset(('css/pages/dashboard.css'))); ?>">
<?php $__env->stopPush(); ?>


<?php $__env->startSection('page'); ?>
    <div class="card col-span-2 xl:col-span-1">

        <div class="card-header">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($trends)): ?>
                <div class="chart_container">
                    <canvas id="trending" data-trends="<?php echo e(json_encode($trends)); ?>"></canvas>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($total_division)): ?>
            <div class="chart_container">
                <canvas id="total_division" data-division="<?php echo e(json_encode($total_division)); ?>"></canvas>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($buying_trends)): ?>
            <div class="chart_container">
                <canvas id="buying_trends" data-buying-trends="<?php echo e(json_encode($buying_trends)); ?>"></canvas>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($req_for_quotation_trends)): ?>
            <div class="chart_container">
                <canvas id="req_for_quote_trends" data-trends="<?php echo e(json_encode($req_for_quotation_trends)); ?>"></canvas>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($quotation_trends)): ?>
            <div class="chart_container">
                <canvas id="quotation_trends" data-trends="<?php echo e(json_encode($quotation_trends)); ?>"></canvas>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset(('js/pages/dashboard.js'))); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\AlahdeenB2b-main\AlahdeenB2b-main\resources\views/pages/dashboard/index.blade.php ENDPATH**/ ?>