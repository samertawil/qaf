<div>



    <x-breadcrumb-website :pageTitle="__('customTrans.reels')">

        <a href="{{ route('reels.list') }}" class="text-muted">{{ __('customTrans.reels') }} </a>

    </x-breadcrumb-website>


    {{-- 
    <div class="loader">
        <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="100" height="100" alt="logo" />
    </div> --}}

    <div class="allReels pSection reels">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                <div class="col-auto">
                    <h2 class="titleSection titleSection2">
                        <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="16" height="16"
                            alt="logo" class="me-2" />
                        محتوى منصات تفاعلية
                    </h2>
                </div>
                <div class="col-auto">
                    <span class="btnShowFilter d-sm-none">
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15 10.5A3.502 3.502 0 0 0 18.355 8H21a1 1 0 1 0 0-2h-2.645a3.502 3.502 0 0 0-6.71 0H3a1 1 0 0 0 0 2h8.645A3.502 3.502 0 0 0 15 10.5zM3 16a1 1 0 1 0 0 2h2.145a3.502 3.502 0 0 0 6.71 0H21a1 1 0 1 0 0-2h-9.145a3.502 3.502 0 0 0-6.71 0H3z"
                                    fill="#ffffff"></path>
                            </g>
                        </svg>
                    </span>
                    <div class="boxFilterFatwas">
                        <form action="" class="formSearchFatwa">
                            <div class="boxInput relative">
                                <input type="search" placeholder="ابحث حسب العنوان" wire:model.live='search'
                                    name='search' />
                                <button type="submit">
                                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.0392 15.6244C18.2714 14.084 19.0082 12.1301 19.0082 10.0041C19.0082 5.03127 14.9769 1 10.0041 1C5.03127 1 1 5.03127 1 10.0041C1 14.9769 5.03127 19.0082 10.0041 19.0082C12.1301 19.0082 14.084 18.2714 15.6244 17.0392L21.2921 22.707C21.6828 23.0977 22.3163 23.0977 22.707 22.707C23.0977 22.3163 23.0977 21.6828 22.707 21.2921L17.0392 15.6244ZM10.0041 17.0173C6.1308 17.0173 2.99087 13.8774 2.99087 10.0041C2.99087 6.1308 6.1308 2.99087 10.0041 2.99087C13.8774 2.99087 17.0173 6.1308 17.0173 10.0041C17.0173 13.8774 13.8774 17.0173 10.0041 17.0173Z"
                                                fill="#fff"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <select wire:model.live='social_media_id'>
                                <option value="">جميع المنصات</option>
                                @foreach ($this->socials as $social)
                                    <option value="{{ $social->id }}">{{ $social->status_name }} </option>
                                @endforeach
                            </select>


                            <select wire:model.live='reel_category_id'>
                                <option value="">جميع التصنيفات</option>
                                @foreach ($this->categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->status_name }} </option>
                                @endforeach
                            </select>


                            <select wire:model.live='media_type_id'>
                                <option value="">{{ __('customTrans.media_type_id') }}</option>

                                <option value="1">{{ __('customTrans.video') }} </option>
                                <option value="2">{{ __('customTrans.image') }} </option>

                            </select>


                        </form>
                    </div>
                    <div class="bg"></div>
                </div>
            </div>
            <div class="row gy-4">
                @forelse ($this->reels as $reel)
                    <div class="col-lg-3 col-md-4 col-sm-6">

                        <div class="boxImg">

                            @if ($reel->media_type_id == 1)
                                <video controls>
                                    <source src="{{ asset('storage/' . $reel->cover_image) }}" type="video/mp4">
                                </video>
                            @elseif ($reel->media_type_id == 2)
                                <img src="{{ asset('storage/' . $reel->cover_image) }}" width="100" height="100"
                                    alt="image" />
                            @endif



                            <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="32" height="32"
                                alt="logo" class="logo" />
                            <div class="contentReel">
                                <div>
                                    <h5>{{ $reel->reel_name }}</h5>
                                    <p>
                                        {{ $reel->reel_title }}
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                @empty
                    <p>{{ __('customTrans.no data found') }}</p>
                @endforelse
            </div>
        </div>
    </div>




</div>
