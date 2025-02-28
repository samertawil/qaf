<div>




    <div class="loader">
        <img src="{{asset('website-assets//imgs/logo-color.svg')}}" width="100" height="100" alt="logo">
    </div>


    <div class="reels pSection">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <h2 class="titleSection">
                        <img src="{{asset('website-assets/imgs/logo-color2.svg')}}" width="16" height="16" alt="logo" class="me-2" />
                         منصات تفاعلية
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="{{route('reels.list')}}"  class="btnFill btnFill2"> عرض الكل </a>
                </div>
            </div>
            <div class="row mt-4 mt-lg-5">
                <div class="col-12">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @forelse ($this->reels as $reel)
                                @if ($reel->media_type_id == 1)
                                    <div class="swiper-slide">
                                        <div class="boxImg">
                                            <div class="social {{$reel->social_media_name}}">
                                                <svg fill="#C89D54" width="64px" height="64px" viewBox="0 0 32 32"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <video  muted  >
                                                <source src="{{ asset('storage/' . $reel->cover_image) }}"
                                                    type="video/mp4">
                                            </video>
                                            <div class="iconSound">
                                                <span class="unmute">
                                                    <svg width="64px" height="64px" viewBox="0 0 24.00 24.00"
                                                        xmlns="http://www.w3.org/2000/svg" id="sound-max"
                                                        class="icon glyph" fill="#000000" stroke="#000000"
                                                        stroke-width="0.00024000000000000003">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M18.36,19.36a1,1,0,0,1-.7-.29,1,1,0,0,1,0-1.41,8,8,0,0,0,0-11.32,1,1,0,0,1,1.41-1.41,10,10,0,0,1,0,14.14A1,1,0,0,1,18.36,19.36Z"
                                                                fill="#080"></path>
                                                            <path
                                                                d="M15.54,16.54a1,1,0,0,1-.71-.3,1,1,0,0,1,0-1.41,4,4,0,0,0,0-5.66,1,1,0,0,1,1.41-1.41,6,6,0,0,1,0,8.48A1,1,0,0,1,15.54,16.54Z"
                                                                fill="#080"></path>
                                                            <path
                                                                d="M11.38,4.08a1,1,0,0,0-1.09.21L6.59,8H4a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H6.59l3.7,3.71A1,1,0,0,0,11,20a.84.84,0,0,0,.38-.08A1,1,0,0,0,12,19V5A1,1,0,0,0,11.38,4.08Z"
                                                                fill="#080"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <span class="mute">
                                                    <svg width="64px" height="64px" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg" id="sound-mute-alt"
                                                        class="icon glyph" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                            stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path
                                                                d="M11.38,4.08a1,1,0,0,0-1.09.21L6.59,8H4a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H6.59l3.7,3.71A1,1,0,0,0,11,20a.84.84,0,0,0,.38-.08A1,1,0,0,0,12,19V5A1,1,0,0,0,11.38,4.08Z"
                                                                fill="#080"></path>
                                                            <path
                                                                d="M16,15.5a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l5-5a1,1,0,0,1,1.42,1.42l-5,5A1,1,0,0,1,16,15.5Z"
                                                                fill="#080"></path>
                                                            <path
                                                                d="M21,15.5a1,1,0,0,1-.71-.29l-5-5a1,1,0,0,1,1.42-1.42l5,5a1,1,0,0,1,0,1.42A1,1,0,0,1,21,15.5Z"
                                                                fill="#080"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="32"
                                                height="32" alt="logo" class="logo">
                                            <span class="type">
                                                <h5>{{ $reel->reel_category }}</h5>
                                            </span>
                                            <div class="contentReel">
                                                <div>
                                                    <h5>{{ $reel->reel_name }}</h5>
                                                    {{ $reel->reel_title }}
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{route('reel.show',$reel->id)}}" class="btnFill btnFill2"> مشاهدة الأن </a>
                                    </div>
                                @elseif ($reel->media_type_id == 2)
                                    <div class="swiper-slide">
                                        <div class="boxImg">
                                            <div class="social instagram">
                                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" stroke="#C89D54"
                                                    stroke-width="0.00024000000000000003">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12ZM17.5 8C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5C16 7.32843 16.6716 8 17.5 8Z"
                                                            fill="#C89D54"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <img src="{{ asset('storage/'.$reel->cover_image) }}" width="100"
                                                height="100" alt="image" />
                                            <img src="{{ asset('website-assets/imgs/logo-color.svg') }}"
                                                width="32" height="32" alt="logo" class="logo">
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
                                        <a href="{{route('reel.show',$reel->id)}}" class="btnFill btnFill2"> مشاهدة الأن </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 justify-content-center align-items-center">
                <div class="swiper-button-prev">
                    <svg width="64px" height="64px" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)">
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
                <div class="swiper-pagination mx-4"></div>
                <div class="swiper-button-next">
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
 

</div>
