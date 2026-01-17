<div class="overflow-x-auto mt-6" id="categories">
    <table class="table-auto border-collapse w-full">
        <thead>
            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
            <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8"><?php echo e(__('ID')); ?></th>
            <th class="px-4 py-2" style="background-color:#f8f8f8"><?php echo e(__('Image')); ?></th>
            <th class="px-4 py-2" style="background-color:#f8f8f8"><?php echo e(__('Title')); ?></th>
            <th class="px-4 py-2" style="background-color:#f8f8f8"><?php echo e(__('Parent Category')); ?></th>
            <th class="px-4 py-2" style="background-color:#f8f8f8"><?php echo e(__('Status')); ?></th>
            <th class="px-4 py-2" style="background-color:#f8f8f8"><?php echo e(__('Created At')); ?></th>
            <th class="px-4 py-2" style="background-color:#f8f8f8"><?php echo e(__('Display Section')); ?></th>
            <th class="px-4 py-2" style="background-color:#f8f8f8"><?php echo e(__('Controls')); ?></th>
            </tr>
        </thead>
        <tbody class="text-sm font-normal text-gray-700 search_results">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4"><?php echo e($category->id); ?></td>
                <td class="px-4 py-4">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($category->image_path)): ?>
                        <img class="object-cover object-center" width="100" height="100" src="<?php echo e(asset(str_replace('/storage/', '', $category->image_path))); ?>" alt="<?php echo e($category->title . ' Image'); ?>" />
                    <?php else: ?>
                        <?php echo e(__('Not Provided')); ?>

                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
                <td class="px-4 py-4"><?php echo e($category->title); ?></td>
                <td class="px-4 py-4"><?php echo e(!empty($category->parent_category) ? $category->parent_category->title : 'NA'); ?></td>
                <td class="px-4 py-4 <?php echo e($category->deleted_at ? 'text-red-500': 'text-green-500'); ?>"><?php echo e($category->deleted_at ? 'Deleted': 'On'); ?></td>
                <td class="px-4 py-4"><?php echo e($category->created_at); ?></td>
                <td class="px-4 py-4"><?php echo e(!empty($category->home_page_category) ? $category->home_page_category->display_section : 'NA'); ?></td>
                <td class="px-4 py-4">
                    <?php
                        $showRoute = route('admin.category.show',['category' => $category->id]);
                        $showTitle = __('View Category Details');
                        $editRoute = route('admin.category.edit',['category' => $category->id]);
                        $editTitle = __('Edit Category Details');
                        if($category->deleted_at) {
                            $showRoute = route('admin.category.show-deleted',['category_id' => $category->id]);
                            $editRoute = "#";
                            $editTitle = "Reactivate category to edit it";
                        }
                    ?>
                    <a href="<?php echo e($showRoute); ?>" title="<?php echo e($showTitle); ?>">
                        <i class="fa fa-eye"></i>
                    </a>
                    <a href="<?php echo e($editRoute); ?>" title="<?php echo e($editTitle); ?>" class="mx-0.5">
                        <i class="fa fa-pencil mx-0.5"></i>
                    </a>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($category->deleted_at): ?>
                        <a href="<?php echo e(route('admin.category.restore',['category_id' => $category->id])); ?>" title="<?php echo e(__('Enable Category')); ?>" class="ml-1 restore-category">
                            <i class="fa fa-toggle-off"></i>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('admin.category.destroy',['category' => $category->id])); ?>" title="<?php echo e(__('Deactivate Category')); ?>" class="ml-1 delete-category">
                            <i class="fa fa-toggle-on"></i>
                        </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </tbody>
    </table>
    <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">
        <?php echo e($paginator); ?>

    </div>
</div>
<?php /**PATH D:\Xampp\htdocs\AlahdeenB2b-main\AlahdeenB2b-main\resources\views/components/category/index/load.blade.php ENDPATH**/ ?>