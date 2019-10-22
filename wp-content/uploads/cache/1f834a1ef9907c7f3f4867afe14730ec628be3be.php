
<section class="main-slider">
    <div class="main-slider_info">
        <h4>Lorem Ipsum dolor sit </h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        <a href="#" title="Make an appointment" class="blue_btn">Make an appointment</a>
    </div>
    <?php if(CFS()->get( 'mainslider_slider' )): ?>
    <div class="main-slider_items">
        <?php ($images = CFS()->get( 'mainslider_slider' )); ?>
        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#">
                <?php echo wp_get_attachment_image( $img['mainslider_slide'], 'full'); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
</section>

<section class="our-promise">
    <div class="container">
        
            
        
        <?php if(CFS()->get( 'promise_title_2' )): ?>
            <div class="our-promise_bg-text">
            <?php echo e(CFS()->get( 'promise_bigtext' )); ?>

            </div>
            <h4 class="our-promise_title">
                <span><?php echo e(CFS()->get( 'promise_title_1' )); ?></span>
                <?php echo e(CFS()->get( 'promise_title_2' )); ?>

            </h4>
            <div class="our-promise_text">
                <?php echo e(CFS()->get( 'promise_text' )); ?>

            </div>
        <?php endif; ?>

            
                
            

    </div>
</section>

<section class="work-width">
    <div class="container">
        <?php if(CFS()->get( 'promise_title_2' )): ?>
            <div class="work-width_bg-text">
                <?php echo e(CFS()->get( 'workwith_bigtext' )); ?>

            </div>
            <h3 class="work-width_title">
                <?php echo e(CFS()->get( 'workwith_title' )); ?>

            </h3>
            <div class="work-width_images">
                <?php ($images = CFS()->get( 'workwith_images' )); ?>
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#">
                    <?php echo wp_get_attachment_image( $img['workwith_img'], 'full'); ?>

                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>