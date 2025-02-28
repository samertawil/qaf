<div class="reels pSection">
    <div class="container-lg">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h2 class="titleSection">
                    <img src="{{ asset('website-assets/imgs/logo-color2.svg') }}" width="16" height="16"
                        alt="logo" class="me-2" />
                    شاهد منصات تفاعلية
                </h2>
            </div>
            <div class="col-auto">
                <a href="{{ route('reels.list') }}" class="btnFill btnFill2"> عرض الكل </a>
            </div>
        </div>
        <div class="row mt-4 mt-lg-5">
            <div class="col-12">
                <div
                    class="swiper swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-rtl swiper-watch-progress">
                    <div class="swiper-wrapper" id="swiper-wrapper-f48d7d53b3fd519a" aria-live="off"
                        style="cursor: grab; transition-duration: 0ms; transform: translate3d(432px, 0px, 0px); transition-delay: 0ms;">
                        @forelse ($this->reels as $reel)
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

                                    @if ($reel->media_type_id == 1)
                                        <video >
                                            <source src="{{ asset('storage/' . $reel->cover_image) }}" type="video/mp4">
                                        </video>
                                    @elseif ($reel->media_type_id == 2)
                                        <img src="{{ asset('storage/' . $reel->cover_image) }}" width="100"
                                            height="100" alt="img" class="img" />
                                    @endif


                                    <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="32"
                                        height="32" alt="logo" class="logo">
                                    <span class="type">
                                        <h5>{{ $reel->reel_category }}</h5>
                                    </span>
                                    <div class="contentReel">
                                        <div>
                                            <h5>{{ $reel->reel_name }}</h5>
                                            <p>
                                                {{ $reel->reel_title }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btnFill btnFill2"> مشاهدة الأن </a>
                            </div>

                        @empty
                            <p></p>
                        @endforelse

                        {{-- <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-prev"
                            role="group" aria-label="2 / 4" data-swiper-slide-index="1"
                            style="width: 432px; transition-duration: 0ms; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(-50deg) scale(1); z-index: 0;">
                            <div class="boxImg">
                                <div class="social">
                                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#C89D54"
                                        stroke-width="0.00024000000000000003">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12ZM17.5 8C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5C16 7.32843 16.6716 8 17.5 8Z"
                                                fill="#C89D54"></path>
                                        </g>
                                    </svg>
                                </div>
                                <img src="./imgs/reel2.jpg" width="100" height="100" alt="image">
                                <img src="./imgs/logo-color.svg" width="32" height="32" alt="logo"
                                    class="logo">
                                <span class="type">
                                    اسم التصنيف
                                </span>
                                <div class="contentReel">
                                    <div>
                                        <h5>عنوان الستوري</h5>
                                        <p>
                                            نص تجريبي، لتجربة مكان وشكل النص مع الحجم، نص تجريبي،
                                            لتجربة مكان وشكل النص مع الحجم، نص تجريبي، لتجربة مكان
                                            وشكل النص مع الحجم، نص تجريبي، لتجربة مكان وشكل النص
                                            مع الحجم، نص تجريبي، لتجربة مكان وشكل النص مع الحجم.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btnFill btnFill2"> مشاهدة الأن </a>
                        </div>


                        <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active"
                            role="group" aria-label="3 / 4" data-swiper-slide-index="2"
                            style="width: 432px; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 1;">
                            <div class="boxImg">
                                <div class="social">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                        height="100" viewBox="0 0 24 24">
                                        <path
                                            d="M 2.3671875 3 L 9.4628906 13.140625 L 2.7402344 21 L 5.3808594 21 L 10.644531 14.830078 L 14.960938 21 L 21.871094 21 L 14.449219 10.375 L 20.740234 3 L 18.140625 3 L 13.271484 8.6875 L 9.2988281 3 L 2.3671875 3 z M 6.2070312 5 L 8.2558594 5 L 18.033203 19 L 16.001953 19 L 6.2070312 5 z"
                                            fill="#C89D54"></path>
                                    </svg>
                                </div>
                                <img src="./imgs/reel1.jpg" width="100" height="100" alt="image">
                                <span class="type">
                                    اسم التصنيف
                                </span>
                                <img src="./imgs/logo-color.svg" width="32" height="32" alt="logo"
                                    class="logo">
                                <div class="contentReel">
                                    <div>
                                        <h5>عنوان الستوري</h5>
                                        <p>
                                            نص تجريبي، لتجربة مكان وشكل النص مع الحجم، نص تجريبي،
                                            لتجربة مكان وشكل النص مع الحجم، نص تجريبي، لتجربة مكان
                                            وشكل النص مع الحجم، نص تجريبي، لتجربة مكان وشكل النص
                                            مع الحجم، نص تجريبي، لتجربة مكان وشكل النص مع الحجم.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btnFill btnFill2"> مشاهدة الأن </a>
                        </div>
                        <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-next"
                            role="group" aria-label="4 / 4" data-swiper-slide-index="3"
                            style="width: 432px; transition-duration: 0ms; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(50deg) scale(1); z-index: 0;">
                            <div class="boxImg">
                                <div class="social">
                                    <svg width="64px" height="64px" viewBox="0 0 24.00 24.00" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" stroke="#C89D54"
                                        stroke-width="0.00024000000000000003">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M12 4C10.4178 4 8.87103 4.46919 7.55544 5.34824C6.23985 6.22729 5.21447 7.47672 4.60897 8.93853C4.00347 10.4003 3.84504 12.0089 4.15372 13.5607C4.4624 15.1126 5.22433 16.538 6.34315 17.6569C7.46197 18.7757 8.88743 19.5376 10.4393 19.8463C11.9911 20.155 13.5997 19.9965 15.0615 19.391C16.5233 18.7855 17.7727 17.7602 18.6518 16.4446C19.5308 15.129 20 13.5823 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM15.93 9.48L14.62 15.67C14.52 16.11 14.26 16.21 13.89 16.01L11.89 14.53L10.89 15.46C10.8429 15.5215 10.7824 15.5715 10.7131 15.6062C10.6438 15.6408 10.5675 15.6592 10.49 15.66L10.63 13.66L14.33 10.31C14.5 10.17 14.33 10.09 14.09 10.23L9.55 13.08L7.55 12.46C7.12 12.33 7.11 12.03 7.64 11.83L15.35 8.83C15.73 8.72 16.05 8.94 15.93 9.48Z"
                                                fill="#C89D54"></path>
                                        </g>
                                    </svg>
                                </div>
                                <img src="./imgs/reel1.jpg" width="100" height="100" alt="image">
                                <span class="type">
                                    اسم التصنيف
                                </span>
                                <img src="./imgs/logo-color.svg" width="32" height="32" alt="logo"
                                    class="logo">
                                <div class="contentReel">
                                    <div>
                                        <h5>عنوان الستوري</h5>
                                        <p>
                                            نص تجريبي، لتجربة مكان وشكل النص مع الحجم، نص تجريبي،
                                            لتجربة مكان وشكل النص مع الحجم، نص تجريبي، لتجربة مكان
                                            وشكل النص مع الحجم، نص تجريبي، لتجربة مكان وشكل النص
                                            مع الحجم، نص تجريبي، لتجربة مكان وشكل النص مع الحجم.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="" class="btnFill btnFill2"> مشاهدة الأن </a>
                        </div> --}}
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
