<div class="reels pSection">
    <div class="container-lg">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h2 class="titleSection">
                    <img src="<?php echo e(asset('website-assets/imgs/logo-color2.svg')); ?>" width="16" height="16"
                        alt="logo" class="me-2" />
                    شاهد منصات تفاعلية
                </h2>
            </div>
            <div class="col-auto">
                <a href="<?php echo e(route('reels.list')); ?>" class="btnFill btnFill2"> عرض الكل </a>
            </div>
        </div>
        <div class="row mt-4 mt-lg-5">
            <div class="col-12">
                <div
                    class="swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-rtl swiper-watch-progress">
                    <div class="swiper-wrapper" id="swiper-wrapper-f48d7d53b3fd519a" aria-live="off"
                        style="cursor: grab; transition-duration: 0ms; transform: translate3d(432px, 0px, 0px); transition-delay: 0ms;">
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $this->reels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="swiper-slide" role="group" aria-label="1 / 4" data-swiper-slide-index="0"
                                style="width: 432px; transition-duration: 0ms; transform: translate3d(0px, 0px, -200px) rotateX(0deg) rotateY(-100deg) scale(1); z-index: -1;">
                                <div class="boxImg">
                                    <div class="social">
                                        <svg fill="#C89D54" width="64px" height="64px" viewBox="0 0 32 32"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path
                                                    d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>

                                    <!--[if BLOCK]><![endif]--><?php if($reel->media_type_id == 1): ?>
                                        <video >
                                            <source src="<?php echo e(asset('storage/' . $reel->cover_image)); ?>" type="video/mp4">
                                        </video>
                                    <?php elseif($reel->media_type_id == 2): ?>
                                        <img src="<?php echo e(asset('storage/' . $reel->cover_image)); ?>" width="100"
                                            height="100" alt="img" class="img" />
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


                                    <img src="<?php echo e(asset('website-assets/imgs/logo-color.svg')); ?>" width="32"
                                        height="32" alt="logo" class="logo">
                                    <span class="type">
                                        <h5><?php echo e($reel->reel_category); ?></h5>
                                    </span>
                                    <div class="contentReel">
                                        <div>
                                            <h5><?php echo e($reel->reel_name); ?></h5>
                                            <p>
                                                <?php echo e($reel->reel_title); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btnFill btnFill2"> مشاهدة الأن </a>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p></p>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                        
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
        <div class="row mt-3 justify-content-center align-items-center">
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                aria-controls="swiper-wrapper-f48d7d53b3fd519a">
                <svg width="64px" height="64px" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                    transform="matrix(1, 0, 0, 1, 0, 0)">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M11.7318 9.35984C12.0854 8.93556 12.7159 8.87824 13.1402 9.2318C13.5645 9.58537 13.6218 10.2159 13.2682 10.6402L8.26825 16.6402C7.91468 17.0645 7.28412 17.1218 6.85984 16.7682C6.43556 16.4147 6.37824 15.7841 6.7318 15.3598L11.7318 9.35984Z"
                            fill="#C89D54"></path>
                        <path
                            d="M6.7318 4.64021C6.37824 4.21593 6.43556 3.58537 6.85984 3.2318C7.28412 2.87824 7.91468 2.93556 8.26825 3.35984L13.2682 9.35984C13.6218 9.78412 13.5645 10.4147 13.1402 10.7682C12.7159 11.1218 12.0854 11.0645 11.7318 10.6402L6.7318 4.64021Z"
                            fill="#C89D54"></path>
                    </g>
                </svg>
            </div>
            <div class="swiper-pagination mx-4 swiper-pagination-bullets swiper-pagination-horizontal"><span
                    class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span
                    class="swiper-pagination-bullet"></span></div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                aria-controls="swiper-wrapper-f48d7d53b3fd519a">
                <svg width="64px" height="64px" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M11.7318 9.35984C12.0854 8.93556 12.7159 8.87824 13.1402 9.2318C13.5645 9.58537 13.6218 10.2159 13.2682 10.6402L8.26825 16.6402C7.91468 17.0645 7.28412 17.1218 6.85984 16.7682C6.43556 16.4147 6.37824 15.7841 6.7318 15.3598L11.7318 9.35984Z"
                            fill="#C89D54"></path>
                        <path
                            d="M6.7318 4.64021C6.37824 4.21593 6.43556 3.58537 6.85984 3.2318C7.28412 2.87824 7.91468 2.93556 8.26825 3.35984L13.2682 9.35984C13.6218 9.78412 13.5645 10.4147 13.1402 10.7682C12.7159 11.1218 12.0854 11.0645 11.7318 10.6402L6.7318 4.64021Z"
                            fill="#C89D54"></path>
                    </g>
                </svg>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\qaf\project-qaf-admin\resources\views/livewire/website/index-sections/reels.blade.php ENDPATH**/ ?>