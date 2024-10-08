<?php if (isset($component)) { $__componentOriginal4619374cef299e94fd7263111d0abc69 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4619374cef299e94fd7263111d0abc69 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

   <?php $__env->slot('page_title', null, []); ?>  <?php echo e($title); ?>  <?php $__env->endSlot(); ?>

   <?php $__env->slot('heading', null, []); ?> 
    <header>
      <!-- Navigation -->
      <nav x-data="{ mobileMenuOpen: false, userMenuOpen: false }" class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 justify-between">
            <div class="flex">
              <div class="flex flex-shrink-0 items-center">
                <a href="/">
                  <h2 class="font-bold text-2xl">Barta</h2>
                </a>
              </div>
            </div>
            <div class="hidden sm:ml-6 sm:flex gap-2 sm:items-center">
              <div class="relative ml-3" x-data="{ open: false }">
                <div>
                  <button @click="open = !open" type="button"
                    class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://avatars.githubusercontent.com/u/831997"
                      alt="Ahmed Shamim Hasan Shaon" />
                  </button>
                </div>

                <!-- Dropdown menu -->
                <div x-show="open" @click.away="open = false"
                  class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                  role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <a href="<?php echo e(route('user.profile')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="<?php echo e(route('user.edit')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem" tabindex="-1" id="user-menu-item-1">Edit Profile</a>
                  <a href="<?php echo e(route('logout')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
              <!-- Mobile menu button -->
              <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Icon when menu is closed -->
                <svg x-show="!mobileMenuOpen" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

                <!-- Icon when menu is open -->
                <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header>
   <?php $__env->endSlot(); ?>

  <?php echo e($main_content); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $attributes = $__attributesOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__attributesOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4619374cef299e94fd7263111d0abc69)): ?>
<?php $component = $__componentOriginal4619374cef299e94fd7263111d0abc69; ?>
<?php unset($__componentOriginal4619374cef299e94fd7263111d0abc69); ?>
<?php endif; ?>
<?php /**PATH E:\Workspaces\Laravel Project\Assignment\Assignment_7\barta_app\resources\views/components/layout.blade.php ENDPATH**/ ?>