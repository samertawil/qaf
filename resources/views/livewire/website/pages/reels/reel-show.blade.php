 <div>

     <x-breadcrumb-website :pageTitle="__('customTrans.reels')">

         <a href="{{ route('reels.list') }}" class="text-muted">{{ __('customTrans.reels') }} </a>

     </x-breadcrumb-website>



     <div class="loader">
         <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="100" height="100" alt="logo">
     </div>

     <div class="singleReel pSection">
         <div class="container-lg">
             <div class="row">
                 <div class="col-12">
                     <div class="swiper">
                         <div class="swiper-wrapper">
                             {{-- video --}}
                             @foreach ($this->reels as $reel)
                                 <div class="swiper-slide">
                                     <div class="row">
                                         <div class="col-md-4 order-1 order-md-0">
                                             <div class="detailsReel">
                                                 <span class="love">
                                                     <svg fill="#c7c7c7" width="64px" height="64px"
                                                         viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg"
                                                         stroke="#c7c7c7" stroke-width="0.00024000000000000003">
                                                         <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                             stroke-linejoin="round"></g>
                                                         <g id="SVGRepo_iconCarrier">
                                                             <path
                                                                 d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z">
                                                             </path>
                                                         </g>
                                                     </svg>
                                                 </span>
                                                 <div>
                                                     <h2>
                                                        {{ $reel->id  }}
                                                         {{ $reel->reel_name }}
                                                     </h2>

                                                     <p>
                                                         {{ $reel->reel_title }}
                                                     </p>
                                                     <div class="tags">
                                                         <a href="">
                                                             الإسلام
                                                         </a>
                                                         <a href="">
                                                             الصلاة
                                                         </a>
                                                         <a href="">
                                                             رمضان
                                                         </a>
                                                         <a href="">
                                                             صلاة الفجر
                                                         </a>
                                                     </div>
                                                 </div>
                                                 <div>
                                                     <a href="" class="type">
                                                         {{ $reel->reel_category }}
                                                     </a>
                                                     <a href="javascript:void(0)" class="social facebook">
                                                         <svg fill="#C89D54" width="64px" height="64px"
                                                             viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                             <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                             <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                 stroke-linejoin="round"></g>
                                                             <g id="SVGRepo_iconCarrier">
                                                                 <path
                                                                     d="M21.95 5.005l-3.306-.004c-3.206 0-5.277 2.124-5.277 5.415v2.495H10.05v4.515h3.317l-.004 9.575h4.641l.004-9.575h3.806l-.003-4.514h-3.803v-2.117c0-1.018.241-1.533 1.566-1.533l2.366-.001.01-4.256z">
                                                                 </path>
                                                             </g>
                                                         </svg>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-8 order-0 order-md-1">
                                             <div class="content">
                                                 @if ($reel->media_type_id == 1)
                                                     <div class="boxVideo relative">
                                                         <video preload="metadata" class="paused" loop>
                                                             <source src="{{ asset('storage/' . $reel->cover_image) }}"
                                                                 type="video/mp4">
                                                         </video>
                                                         <div class="iconSound">
                                                             <span class="unmute">
                                                                 <svg width="64px" height="64px"
                                                                     viewBox="0 0 24.00 24.00"
                                                                     xmlns="http://www.w3.org/2000/svg" id="sound-max"
                                                                     class="icon glyph" fill="#000000" stroke="#000000"
                                                                     stroke-width="0.00024000000000000003">
                                                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                     <g id="SVGRepo_tracerCarrier"
                                                                         stroke-linecap="round" stroke-linejoin="round">
                                                                     </g>
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
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     id="sound-mute-alt" class="icon glyph"
                                                                     fill="#000000">
                                                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                     <g id="SVGRepo_tracerCarrier"
                                                                         stroke-linecap="round" stroke-linejoin="round">
                                                                     </g>
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
                                                         <div class="icon">
                                                             <span class="play">
                                                                 <svg width="64px" height="64px" viewBox="0 0 24 24"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                     <g id="SVGRepo_tracerCarrier"
                                                                         stroke-linecap="round"
                                                                         stroke-linejoin="round"></g>
                                                                     <g id="SVGRepo_iconCarrier">
                                                                         <path
                                                                             d="M21.4086 9.35258C23.5305 10.5065 23.5305 13.4935 21.4086 14.6474L8.59662 21.6145C6.53435 22.736 4 21.2763 4 18.9671L4 5.0329C4 2.72368 6.53435 1.26402 8.59661 2.38548L21.4086 9.35258Z"
                                                                             fill="#005450"></path>
                                                                     </g>
                                                                 </svg>
                                                             </span>
                                                         </div>
                                                     </div>
                                                 @else
                                                     <div class="col-md-12 order-0 order-md-1">
                                                         <div class="content">
                                                             <img src="{{ asset('storage/' . $reel->cover_image) }}"
                                                                 width="100" height="100" alt="image">
                                                         </div>
                                                     </div>
                                                 @endif

                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach

                             {{-- image --}}
                             {{-- <div class="swiper-slide">
                                 <div class="row">
                                     <div class="col-md-4 order-1 order-md-0">
                                         <div class="detailsReel">
                                             <span class="love">
                                                 <svg fill="#c7c7c7" width="64px" height="64px"
                                                     viewBox="0 0 24.00 24.00" xmlns="http://www.w3.org/2000/svg"
                                                     stroke="#c7c7c7" stroke-width="0.00024000000000000003">
                                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                         stroke-linejoin="round"></g>
                                                     <g id="SVGRepo_iconCarrier">
                                                         <path
                                                             d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z">
                                                         </path>
                                                     </g>
                                                 </svg>
                                             </span>
                                             <div>
                                                 <h2>
                                                     عنوان السلايدر الثاني
                                                 </h2>
                                                 <p>
                                                     هذا النص تجريبي فقط، هذا النص تجريبي فقط، هذا النص تجريبي فقط، هذا
                                                     النص تجريبي فقط، هذا النص
                                                     تجريبي فقط،
                                                     هذا النص تجريبي فقط، هذا النص تجريبي فقط، هذا النص تجريبي فقط، هذا
                                                     النص تجريبي فقط، هذا النص
                                                     تجريبي فقط،
                                                     هذا النص تجريبي فقط، هذا النص تجريبي فقط، هذا النص تجريبي فقط، هذا
                                                     النص تجريبي فقط، هذا النص
                                                     تجريبي فقط.
                                                 </p>
                                                 <div class="tags">
                                                     <a href="">
                                                         الإسلام
                                                     </a>
                                                     <a href="">
                                                         الصلاة
                                                     </a>
                                                     <a href="">
                                                         رمضان
                                                     </a>
                                                     <a href="">
                                                         صلاة الفجر
                                                     </a>
                                                 </div>
                                             </div>
                                             <div>
                                                 <a href="" class="type">
                                                     تصنيف الريل
                                                 </a>
                                                 <a href="javascript:void(0)" class="social instagram">
                                                     <svg width="64px" height="64px" viewBox="0 0 24 24"
                                                         fill="none" xmlns="http://www.w3.org/2000/svg"
                                                         stroke="#C89D54" stroke-width="0.00024000000000000003">
                                                         <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                         <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                             stroke-linejoin="round"></g>
                                                         <g id="SVGRepo_iconCarrier">
                                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                                 d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6ZM6 4C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6ZM12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12ZM17.5 8C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5C16 7.32843 16.6716 8 17.5 8Z"
                                                                 fill="#C89D54"></path>
                                                         </g>
                                                     </svg>
                                                 </a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-8 order-0 order-md-1">
                                         <div class="content">
                                             <img src="./imgs/reel3.jpg" width="100" height="100"
                                                 alt="image">
                                         </div>
                                     </div>
                                 </div>
                             </div> --}}

                         </div>
                         <div class="prevNextReel">
                             <a href="javascript:void(0)" class="prev">
                                 المحتوى السابق
                             </a>
                             <a href="javascript:void(0)" class="next">
                                 المحتوى التالي
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


 </div>
