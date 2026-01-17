<div id="sideBar"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">

    <div class="flex flex-col">
        <div class="text-right hidden md:block mb-4">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>

        <a class="mb-2" href="javasacript:void(0);"
            class="capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <?php echo e(__('Main Website')); ?>

        </a>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Session::get('user_type') == 'seller'): ?>
            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"> <?php echo e(__('Subscriptions')); ?> </p>
            <a href="<?php echo e(route('subscription.home')); ?>"
                class="capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('List')); ?>

            </a>

            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Products')); ?></p>
            <a href="<?php echo e(route('product.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('List')); ?>

            </a>
            <a href="<?php echo e(route('product.create')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-plus fa-md mr-2"></i>
                <?php echo e(__('Add')); ?>

            </a>

            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Catalogs')); ?></p>
            <a href="<?php echo e(route('catalog.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('List')); ?>

            </a>
            <a href="<?php echo e(route('catalog.create')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-plus fa-md mr-2"></i>
                <?php echo e(__('Add')); ?>

            </a>

            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Warehouse')); ?></p>
            <a href="<?php echo e(route('warehouse.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('List')); ?>

            </a>
            <a href="<?php echo e(route('warehouse.create')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-plus fa-md mr-2"></i>
                <?php echo e(__('Add')); ?>

            </a>
            <a href="<?php echo e(route('warehousebookings.invoices')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('Booking Invoices')); ?>

            </a>
            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Khata')); ?></p>
            <a href="<?php echo e(route('khata.client.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-users fa-md mr-2"></i>
                <?php echo e(__('Manage Clients')); ?>

            </a>
            <a href="<?php echo e(route('khata.invoice.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-file-invoice-dollar fa-md mr-2"></i>
                <?php echo e(__('Manage Invoices')); ?>

            </a>
            <a href="<?php echo e(route('khata.challan.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-file-invoice fa-md mr-2"></i>
                <?php echo e(__('Manage Delivery Challans')); ?>

            </a>
            <a href="<?php echo e(route('khata.inventory.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-file-invoice fa-md mr-2"></i>
                <?php echo e(__('Inventory Management')); ?>

            </a>
            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Manage Leads')); ?></p>
            <a href="<?php echo e(route('product-buy-requirement.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('Buy Leads')); ?>

            </a>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(Session::get('user_type') == 'buyer'): ?>

            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Warehouse')); ?></p>
            <a href="<?php echo e(route('warehousebookings.index')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('Requested Bookings')); ?>

            </a>
            <a href="<?php echo e(route('warehousebookings.invoices')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('Booking Invoices')); ?>

            </a>

            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Khata')); ?></p>
            <a href="<?php echo e(route('khata.client.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-users fa-md mr-2"></i>
                <?php echo e(__('Manage Clients')); ?>

            </a>
            <a href="<?php echo e(route('khata.invoice.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-file-invoice-dollar fa-md mr-2"></i>
                <?php echo e(__('Manage Invoices')); ?>

            </a>
            <a href="<?php echo e(route('khata.purchase-order.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-bags-shopping fa-md mr-2"></i>
                <?php echo e(__('Manage Purchase Orders')); ?>

            </a>
            <a href="<?php echo e(route('khata.challan.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-file-invoice fa-md mr-2"></i>
                <?php echo e(__('View Delivery Challans')); ?>

            </a>
            <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Manage Leads')); ?></p>
            <a href="<?php echo e(route('product-buy-requirement.home')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('View Buying Requests')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (\Illuminate\Support\Facades\Blade::check('hasanyrole', 'admin|super-admin')): ?>

        <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider"><?php echo e(__('Users')); ?></p>
        <a href="<?php echo e(route('admin.users.home')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('List')); ?>

        </a>

        <p class="uppercase text-xs text-gray-600 my-4 tracking-wider"><?php echo e(__('Subscriptions')); ?></p>
        <a href="<?php echo e(route('admin.subscriptions.home')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('List')); ?>

        </a>

        <p class="uppercase text-xs text-gray-600 my-4 tracking-wider"><?php echo e(__('Category')); ?></p>
        <a href="<?php echo e(route('admin.category.home')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('List')); ?>

        </a>
        <a href="<?php echo e(route('admin.category.create')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-plus text-xs mr-2"></i>
            <?php echo e(__('Add')); ?>

        </a>
        <a href="<?php echo e(route('admin.category.display-order')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-plus text-xs mr-2"></i>
            <?php echo e(__('Home Page Display')); ?>

        </a>

        <p class="uppercase text-xs text-gray-600 my-4 tracking-wider"><?php echo e(__('Products')); ?></p>
        <a href="<?php echo e(route('admin.product.home')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('List')); ?>

        </a>

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Warehouse')); ?></p>
        <a href="<?php echo e(route('admin.warehouse.home')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('List')); ?>

        </a>
        <a href="<?php echo e(route('admin.warehousebookings.home')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('Booking Requests')); ?>

        </a>
        <a href="<?php echo e(route('admin.warehousebookings.invoices')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('Booking Invoices')); ?>

        </a>

        <p class="uppercase text-xs text-gray-600 my-4 tracking-wider"><?php echo e(__('Testimonials')); ?></p>
        <a href="<?php echo e(route('admin.testimonials.home')); ?>"
            class="mb-3 capitalize font-medyium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('List')); ?>

        </a>

        <p class="uppercase text-xs text-gray-600 my-4 tracking-wider"><?php echo e(__('Advertisments')); ?></p>
        <a href="<?php echo e(route('admin.advertisments.home')); ?>"
            class="mb-3 capitalize font-medyium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list text-xs mr-2"></i>
            <?php echo e(__('List')); ?>

        </a> <a href="<?php echo e(route('admin.advertisments.create')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-plus text-xs mr-2"></i>
            <?php echo e(__('Add')); ?>

        </a>
        

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <p class="mb-2 uppercase text-xs text-gray-600 my-4 tracking-wider"> <?php echo e(__('Matter Sheet')); ?> </p>

        <a href="<?php echo e(route('matter-sheet.matter_sheet.listing')); ?>"
            class="mb-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list fa-md mr-2"></i>
            <?php echo e(__('Matter Sheet Listings')); ?>

        </a>

        <a href="<?php echo e(route('matter-sheet.home')); ?>"
            class="mb-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list fa-md mr-2"></i>
            <?php echo e(__('Details')); ?>

        </a>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(is_super_admin()): ?>
            <a href="<?php echo e(route('matter-sheet.additionalDetails')); ?>"
                class="mb-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('Additional Details')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        

        <a href="<?php echo e(route('matter-sheet.company.setting.page')); ?>"
            class="mb-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list fa-md mr-2"></i>
            <?php echo e(__('Company Page Settings')); ?>

        </a>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(is_super_admin()): ?>
            <a href="<?php echo e(route('matter-sheet.certificateAndAwards')); ?>"
                class="mb-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('Certificate & Award')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <a href="<?php echo e(route('matter-sheet.directorProfile')); ?>"
            class="mb-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list fa-md mr-2"></i>
            <?php echo e(__('Director Profile')); ?>

        </a>

        <a href="<?php echo e(route('matter-sheet.productUpload')); ?>"
            class="mb-2 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list fa-md mr-2"></i>
            <?php echo e(__('Upload Product')); ?>

        </a>

        

        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"><?php echo e(__('Logistics')); ?></p>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(is_super_admin()): ?>
            <a href="<?php echo e(route('admin.logistics.drivers.index')); ?>"
                class="mb-3 capitalize font-medyium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list text-xs mr-2"></i>
                <?php echo e(__('Drivers')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <a href="<?php echo e(route('logistics.booking_request.index')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list fa-md mr-2"></i>
            <?php echo e(__('Your Booking Requests')); ?>

        </a>
        <a href="<?php echo e(route('logistics.booking_request.create')); ?>"
            class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
            <i class="fad fa-list fa-md mr-2"></i>
            <?php echo e(__('Request for shipping')); ?>

        </a>

        <?php if(Session::get('user_type') == 'driver'): ?>
            <a href="<?php echo e(route('logistics.drivers.about')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('About and Vehicle')); ?>

            </a>
            
            <a href="<?php echo e(route('logistics.drivers.available_rides')); ?>"
                class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                <i class="fad fa-list fa-md mr-2"></i>
                <?php echo e(__('Available Rides')); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    </div>
</div>
<?php /**PATH D:\Xampp\htdocs\AlahdeenB2b-main\AlahdeenB2b-main\resources\views/components/side-bar.blade.php ENDPATH**/ ?>