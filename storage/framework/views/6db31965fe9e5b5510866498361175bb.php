<div class="overflow-x-auto mt-6 search_results" id="users">
    <table class="table-auto border-collapse w-full">
        <thead>
            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
            <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8"><?php echo e(__('ID')); ?></th>
            <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Name')); ?></th>
            <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('User Type')); ?></th>
            <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Status')); ?></th>
            <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Created At')); ?></th>
            <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Controls')); ?></th>
            </tr>
        </thead>
        <tbody class="text-sm font-normal text-gray-700">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $users->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->id != Auth::user()->id): ?>
            <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4"><?php echo e($user->id); ?></td>
                <td class="px-4 py-4"><?php echo e($user->name); ?></td>
                <td class="px-4 py-4"><?php echo e(ucfirst($user->user_type)); ?></td>
                <td class="px-4 py-4 <?php echo e($user->deleted_at ? 'text-red-500': 'text-green-500'); ?>"><?php echo e($user->deleted_at ? 'Deleted': 'On'); ?></td>
                <td class="px-4 py-4"><?php echo e($user->created_at); ?></td>
                <td class="px-4 py-4">
                    <?php
                        $editRoute = route('admin.users.role.update', ['user' => $user->id]);
                        $editTitle = __("Edit User Role");
                    ?>

                    <span title="<?php echo e($editTitle); ?>" data-target-url="<?php echo e($editRoute); ?>" class="mx-0.5 edit_role" data-role="<?php echo e($user->user_type); ?>">
                        <i class="fa fa-pencil mx-0.5"></i>
                    </span>
                </td>
            </tr>

            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </tbody>
    </table>
    <div id="" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">
        <?php echo e($paginator); ?>

    </div>
</div><?php /**PATH D:\Xampp\htdocs\AlahdeenB2b-main\AlahdeenB2b-main\resources\views/components/users/index/load.blade.php ENDPATH**/ ?>