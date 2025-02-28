<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('website-assets/css/bootstrap-grid.rtl.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('website-assets/css/hamburgers.css') }}" />
  <link rel="stylesheet" href="{{ asset('website-assets/css/main.css') }}" />

  <link rel="stylesheet" href="{{ asset('website-assets/css/swiper-bundle.min.css') }}" />


  <link rel="stylesheet" href="{{ asset('website-assets/assest_live/plyr.css') }}" />
  <title>Qaf</title>
</head>

<body>
 
 

  <!-- Content  -->

  <div class="singleReel pSection">
    <div class="container-lg">
      <div class="row">
        <div class="col-12">
          <div class="swiper">
            <div class="swiper-wrapper">
 
 
              <div class="swiper-slide">
                <div class="row">
                  <div class="col-md-4 order-1 order-md-0">
          
                  </div>
                  <div class="col-md-8 order-0 order-md-1">
                    <div class="content">
                      <div class="boxVideo relative">
                        <video preload="metadata" class="paused" loop>
                          <source src="{{asset('website-assets/imgs/1.mp4')}}" type="video/mp4">
                        </video>
                        <div class="icon">
                          <span class="play">
                            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                              <g id="SVGRepo_iconCarrier">
                                <path
                                  d="M21.4086 9.35258C23.5305 10.5065 23.5305 13.4935 21.4086 14.6474L8.59662 21.6145C6.53435 22.736 4 21.2763 4 18.9671L4 5.0329C4 2.72368 6.53435 1.26402 8.59661 2.38548L21.4086 9.35258Z"
                                  fill="#005450"></path>
                              </g>
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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

  <!-- Content  -->

 

 

 
 
 
 

  <script src="{{ asset('website-assets/js/jquery-3.7.1.min.js') }}"></script>
 <script src="{{ asset('website-assets/assest_live/plyr.min.js') }}"></script>
  {{-- <script src="{{ asset('website-assets/assest_live/hls.min.js') }}"></script>   --}}
  <script src="{{ asset('website-assets/assest_live/script.js') }}"></script>
  <script src="{{ asset('website-assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('website-assets/js/main.js') }}"></script>
</body>

</html>