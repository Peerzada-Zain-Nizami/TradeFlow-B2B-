<div class="overflow-x-auto mt-6" id="users">
    <table class="table-auto border-collapse w-full">
        <thead>
            <tr class="rounded-lg text-sm font-medium text-gray-700 text-left" style="font-size: 0.9674rem">
                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8"><?php echo e(__('ID')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Buyer Name')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Plan')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Amount')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Payment Method')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Status')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Subscription Date')); ?></th>
                <th class="px-4 py-2 " style="background-color:#f8f8f8"><?php echo e(__('Controls')); ?></th>
            </tr>
        </thead>
        <tbody class="text-sm font-normal text-gray-700 search_results">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $subscription_orders->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="hover:bg-gray-100 border-b border-gray-200 py-10">
                <td class="px-4 py-4"><?php echo e($subscription->id); ?></td>
                <td class="px-4 py-4"><?php echo e($subscription->user->name); ?></td>
                <td class="px-4 py-4"><?php echo e($subscription->plan->name); ?></td>
                <td class="px-4 py-4"><?php echo e($subscription->total_amount); ?></td>
                <td class="px-4 py-4"><?php echo e($subscription->payment_method->name); ?></td>
                <td class="px-4 py-4"><?php echo e($subscription->status); ?></td>
                <td class="px-4 py-4"><?php echo e($subscription->created_at); ?></td>
                <td class="px-4 py-4">
                    <?php
                        $editRoute = route('admin.subscriptions.payment_status.update', ['subscription_order' => $subscription->id]);
                        $editTitle = __("Update Payment Status");

                    ?>

                    <span title="<?php echo e($editTitle); ?>" data-user-id="<?php echo e($subscription->user->id); ?>" data-subs-id="<?php echo e($subscription->id); ?>" class="mx-0.5 edit_payment_status" data-target-url="<?php echo e($editRoute); ?>" data-amount="<?php echo e($subscription->total_amount); ?>" data-status="<?php echo e($subscription->status); ?>">
                        <i class="fa fa-pencil mx-0.5"></i>
                    </span>
                </td>
            </tr>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </tbody>
    </table>
    <div id="pagination" class="w-full flex justify-center border-t border-gray-100 pt-4 items-center">
        <?php echo e($paginator); ?>

    </div>
</div>
<?php /**PATH D:\Xampp\htdocs\AlahdeenB2b-main\AlahdeenB2b-main\resources\views/components/subscription/admin/index/load.blade.php ENDPATH**/ ?>