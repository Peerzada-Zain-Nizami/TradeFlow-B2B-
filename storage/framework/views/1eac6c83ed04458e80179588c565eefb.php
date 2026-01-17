<div class="overflow-x-auto mt-6" id="products">

    <table class="table-auto border-collapse w-full">
        <thead>
            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8"><?php echo e(__('ID')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('File')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Category')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('User')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Created At')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Controls')); ?></th>
            </tr>
        </thead>
        <tbody class="text-sm font-normal text-gray-700 search_results">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($products)): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                        <td class="px-4 py-4"><?php echo e($product->id); ?></td>
                        <td class="px-4 py-4"><?php echo e($product->file_path); ?></td>
                        <td class="px-4 py-4"><?php echo e($product->category->title); ?></td>
                        <td class="px-4 py-4"><?php echo e($product->user->name); ?></td>
                        <td class="px-4 py-4"><?php echo e($product->created_at); ?></td>
                        <td class="px-4 py-4">
                            <?php
                            $deleteTitle = __('Delete Matter Sheet');

                            $approveTitle = __('Approve Matter Sheet');

                            if ($product->deleted_at) {
                                $deleteRoute = route('product.show-deleted', ['product_id' => $product->id]);
                                $editRoute = '#';
                                $editTitle = __('Reactivate product to edit it');
                            }
                            ?>

                            <a href="<?php echo e(route('matter-sheet.matter_sheet_product.listing', ['matter_sheet_id' => $product->id])); ?>"
                                title="<?php echo e(__('Show Products')); ?>">
                                <i class="fas fa-eye mx-2"></i>
                            </a>

                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->is_cpa_approved == 0): ?>
                                <a href="<?php echo e(route('matter-sheet.matter_sheet.destroy', ['matter_sheet' => $product->id])); ?>"
                                    title="<?php echo e($deleteTitle); ?>">
                                    <i class="fas fa-trash mx-2"></i>
                                </a>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('hasanyrole', 'admin|super-admin')): ?>
                                <a title="<?php echo e($approveTitle); ?>"
                                    href="<?php echo e(route('matter-sheet.matter_sheet.approve', ['matter_sheet' => $product->id])); ?>">
                                    <i class="fas fa-check mx-2"></i>
                                </a>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php else: ?>
                <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                    <td class="px-4 py-4">
                        <?php echo e(__('No Matter Sheet Found')); ?>

                    </td>
                </tr>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </tbody>
    </table>
    <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">
        <?php echo e($paginator); ?>

    </div>
</div>
<?php /**PATH D:\Xampp\htdocs\AlahdeenB2b-main\AlahdeenB2b-main\resources\views/pages/matter-sheet/listings/mattersheet/load.blade.php ENDPATH**/ ?>