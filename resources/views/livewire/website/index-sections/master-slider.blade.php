<div>
    <div class="heroSection pb-5">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="swiper">
                 
                        <div class="swiper-wrapper">
                            @foreach ($this->sliders as $slide)
                                <div class="swiper-slide">

                                    <div>
                                        <img src="{{ asset('storage/' . $slide->cover_image) }}">

                                        <div class="over">
                                            <h4>{{ $slide->hot_feed ?? $slide->name }}</h4>
                                            <p>
                                                {{ $slide->hot_description ?? $slide->title }}
                                            </p>
                                            <a href="{{ $slide->url }}" target="_blank" class="btnFill"> شاهد 
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
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

    </div>

</div>
