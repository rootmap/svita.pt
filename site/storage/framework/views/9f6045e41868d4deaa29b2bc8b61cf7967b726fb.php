<?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.home-pages.home-'.$home_page, ['home_variant' => $home_page], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/xgenxchi/public_html/laravel/nexelit/beta/@core/resources/views/frontend/frontend-home-demo.blade.php ENDPATH**/ ?>