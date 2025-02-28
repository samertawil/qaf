<div>
    <?php if (isset($component)) { $__componentOriginalece4e9bca6b31b13d6d970ad6a028d1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalece4e9bca6b31b13d6d970ad6a028d1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb-website','data' => ['pageTitle' => __('customTrans.advisories')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('breadcrumb-website'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pageTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('customTrans.advisories'))]); ?>

        <a href="#" class="text-muted"> <?php echo e($advisory_name); ?> </a>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalece4e9bca6b31b13d6d970ad6a028d1f)): ?>
<?php $attributes = $__attributesOriginalece4e9bca6b31b13d6d970ad6a028d1f; ?>
<?php unset($__attributesOriginalece4e9bca6b31b13d6d970ad6a028d1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalece4e9bca6b31b13d6d970ad6a028d1f)): ?>
<?php $component = $__componentOriginalece4e9bca6b31b13d6d970ad6a028d1f; ?>
<?php unset($__componentOriginalece4e9bca6b31b13d6d970ad6a028d1f); ?>
<?php endif; ?>

    <div class="loader">
        <img src="<?php echo e(asset('website-assets/imgs/logo-color.svg')); ?>" width="100" height="100" alt="logo" />
    </div>



    <div class="container-lg pSection">
        <div class="row">
            <div class="col-12">
                <div class="boxMainImage">
                    <img src="<?php echo e(asset('storage/' . $cover_image)); ?>" width="100" height="100" alt="image" />
                    <img src="<?php echo e(asset('website-assets/imgs/logo.png')); ?>" width="32" height="32" alt="logo"
                        class="logo" />
                    <p>
                        <?php echo e($advisory_question); ?>

                    </p>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="contentFatwa">

                    <div class="boxYoutube">
                        <iframe width="560" height="315" src="<?php echo e($url); ?>" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <p class="mb-4">
                        <?php echo e($advisory_answer); ?>

                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="anotherFatwas pSection">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                <div class="col-auto">
                    <h2 class="titleSection">
                        <img src="<?php echo e(asset('website-assets/imgs/logo-color2.svg')); ?>" width="16" height="16"
                            alt="logo" class="me-2" />
                        الفتاوي المتعلقة
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="" class="btnFill btnFill2"> عرض الكل </a>
                </div>
            </div>
           
           <?php echo e($advisoryId); ?>

<?php echo e($id); ?>


            <div class="row gy-4">
                  <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="boxFatwa">
                            <img src="<?php echo e(asset('storage/' . $data->cover_image)); ?>" width="100" height="100"
                                alt="img" class="imgFatwa" />
                            <div class="text">
                                <p>
                                    <?php echo e($data->advisory_question); ?>

                                </p>
                            </div>
                            <div>
                                <a href="<?php echo e(route('advisory.show', $data->id)); ?>"> التفاصيل </a>
                                <img src="<?php echo e(asset('website-assets/imgs/logo.png')); ?>" width="16" height="16"
                                    alt="logo" class="logo" />
                            </div>
                            <a href="" class="linkPerson">
                                <img src="<?php echo e(asset('storage/' . $data->star->s_image)); ?>" width="32" height="32"
                                    alt="person" class="person" />
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]--> 
                   <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->related2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="boxFatwa">
                            <img src="<?php echo e(asset('storage/' . $data->related2->cover_image)); ?>" width="100"
                                height="100" alt="img" class="imgFatwa" />
                            <div class="text">
                                <p>
                                    <?php echo e($data->related2->advisory_question); ?>

                                </p>
                            </div>
                            <div>
                                <a href="<?php echo e(route('advisory.show', $data->related2->id)); ?>"> التفاصيل </a>
                                <img src="<?php echo e(asset('website-assets/imgs/logo.png')); ?>" width="16" height="16"
                                    alt="logo" class="logo" />
                            </div>  
                            <a href="" class="linkPerson">
                                <img src="<?php echo e(asset('storage/' . $data->star->s_image)); ?>" width="32" height="32"
                                    alt="person" class="person" />
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->  


            </div>
        </div>
    </div>




</div>
<?php /**PATH C:\xampp\htdocs\qaf\project-qaf-admin\resources\views/livewire/website/pages/Advisories/advisory-show.blade.php ENDPATH**/ ?>