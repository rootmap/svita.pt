<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/dropzone.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/media-uploader.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Call to action Area')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('backend/partials/error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Call to action Area Settings')); ?></h4>

                        <form action="<?php echo e(route('admin.home08.cta.area')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>" id="nav-home-tab" data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab" aria-controls="nav-home" aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>" id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label for="cagency_cta_section_<?php echo e($lang); ?>_title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" name="cagency_cta_section_<?php echo e($lang->slug); ?>_title" value="<?php echo e(get_static_option('cagency_cta_section_'.$lang->slug.'_title')); ?>" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="cagency_cta_section_<?php echo e($lang); ?>_description"><?php echo e(__('Description')); ?></label>
                                            <textarea name="cagency_cta_section_<?php echo e($lang->slug); ?>_description" class="form-control" ><?php echo e(get_static_option('cagency_cta_section_'.$lang->slug.'_description')); ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="cagency_cta_section_<?php echo e($lang); ?>_button_text"><?php echo e(__('Button Text')); ?></label>
                                            <input type="text" name="cagency_cta_section_<?php echo e($lang->slug); ?>_button_text" value="<?php echo e(get_static_option('cagency_cta_section_'.$lang->slug.'_button_text')); ?>" class="form-control" >
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group">
                                <label for="cagency_cta_section_button_url"><?php echo e(__('Button URL')); ?></label>
                                <input type="text" name="cagency_cta_section_button_url" value="<?php echo e(get_static_option('cagency_cta_section_button_url')); ?>" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="cagency_cta_section_button_icon" class="d-block"><?php echo e(__('Button Icon')); ?></label>
                                <div class="btn-group ">
                                    <button type="button" class="btn btn-primary iconpicker-component">
                                        <i class="<?php echo e(get_static_option('cagency_cta_section_button_icon')); ?>"></i>
                                    </button>
                                    <button type="button" class="icp icp-dd btn btn-primary dropdown-toggle"
                                            data-selected="<?php echo e(get_static_option('cagency_cta_section_button_icon')); ?>" data-toggle="dropdown">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu"></div>
                                </div>
                                <input type="hidden" class="form-control" value="<?php echo e(get_static_option('cagency_cta_section_button_icon')); ?>" name="cagency_cta_section_button_icon">
                            </div>
                            <div class="form-group">
                                <label for="cagency_cta_section_right_image"><?php echo e(__('Right Image')); ?></label>
                                <?php $signature_image_upload_btn_label = 'Upload Image'; ?>
                                <div class="media-upload-btn-wrapper">
                                    <div class="img-wrap">
                                        <?php
                                            $signature_img = get_attachment_image_by_id(get_static_option('cagency_cta_section_right_image'),null,false);
                                        ?>
                                        <?php if(!empty($signature_img)): ?>
                                            <div class="attachment-preview">
                                                <div class="thumbnail">
                                                    <div class="centered">
                                                        <img class="avatar user-thumb" src="<?php echo e($signature_img['img_url']); ?>" >
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $signature_image_upload_btn_label = 'Change Image'; ?>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" name="cagency_cta_section_right_image" value="<?php echo e(get_static_option('cagency_cta_section_right_image')); ?>">
                                    <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Image')); ?>" data-modaltitle="<?php echo e(__('Upload Image')); ?>" data-imgid="<?php echo e(get_static_option('cagency_cta_section_right_image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                        <?php echo e(__($signature_image_upload_btn_label)); ?>

                                    </button>
                                </div>
                                <small><?php echo e(__('recommended image size is 1200x600 pixel')); ?></small>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.partials.media-upload.media-upload-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
    <?php echo $__env->make('backend.partials.media-upload.media-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).ready(function (){
            "use strict";

            $('.icp-dd').iconpicker();
            $('body').on('iconpickerSelected','.icp-dd', function (e) {
                var selectedIcon = e.iconpickerValue;
                $(this).parent().parent().children('input').val(selectedIcon);
                $('body .dropdown-menu.iconpicker-container').removeClass('show');
            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bappy/www/html/svita.pt/site/resources/views/backend/pages/home/creative-agency/call-to-action-area.blade.php ENDPATH**/ ?>