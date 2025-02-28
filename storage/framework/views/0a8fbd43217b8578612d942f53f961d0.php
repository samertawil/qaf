 <div>
 
    
           
     <div class="fatwa pSection">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                <div class="col-auto">
                    <h2 class="titleSection titleSection2">
                        <img src="<?php echo e(asset('website-assets/imgs/logo-color.svg')); ?>" width="16" height="16"
                            alt="logo" class="me-2" />
                        قسم الفتوى
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="" class="btnFill"> عرض الكل </a>
                </div>
            </div>
            <div class="row gy-4">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->advisories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advisory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="boxProgram">
                        <div class="boxImg">
                            <img src="<?php echo e(asset('storage/' . $advisory->cover_image)); ?>" width="100"
                                height="100" alt="img" class="img" />

                            <a href="" class="linkPerson">
                                <!--[if BLOCK]><![endif]--><?php if($advisory->content_start): ?>
                                    <img src="<?php echo e(asset('storage/' . $advisory->star->s_image)); ?>" width="32"
                                        height="32" alt="person" class="person" />
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                            </a>
                        </div>
                        <div class="details">
                            <p>
                                <?php echo e($advisory->advisory_name . ' | ' . $advisory->advisory_question); ?>


                            </p>
                            <a href="<?php echo e(route('advisory.show', $advisory->id)); ?>" class="btnFill btnFill2">
                                مشاهدة الحلقة
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>


 </div>
<?php /**PATH C:\xampp\htdocs\qaf\project-qaf-admin\resources\views/livewire/website/index-sections/advisories.blade.php ENDPATH**/ ?>