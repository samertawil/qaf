<div>
    <x-breadcrumb-website :pageTitle="__('customTrans.advisories')">

        <a href="#" class="text-muted"> {{ $advisory_name }} </a>

    </x-breadcrumb-website>

    <div class="loader">
        <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="100" height="100" alt="logo" />
    </div>



    <div class="container-lg pSection">
        <div class="row">
            <div class="col-12">
                <div class="boxMainImage">
                    <img src="{{ asset('storage/' . $cover_image) }}" width="100" height="100" alt="image" />
                    <img src="{{ asset('website-assets/imgs/logo.png') }}" width="32" height="32" alt="logo"
                        class="logo" />
                    <p>
                        {{ $advisory_question }}
                    </p>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="contentFatwa">

                    <div class="boxYoutube">
                        <iframe width="560" height="315" src="{{ $url }}" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <p class="mb-4">
                        {{ $advisory_answer }}
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
                        <img src="{{ asset('website-assets/imgs/logo-color2.svg') }}" width="16" height="16"
                            alt="logo" class="me-2" />
                        الفتاوي المتعلقة
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="" class="btnFill btnFill2"> عرض الكل </a>
                </div>
            </div>
           
           {{$advisoryId}}
{{$id}}

            <div class="row gy-4">
                  @foreach ($this->related  as $data)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="boxFatwa">
                            <img src="{{ asset('storage/' . $data->cover_image) }}" width="100" height="100"
                                alt="img" class="imgFatwa" />
                            <div class="text">
                                <p>
                                    {{ $data->advisory_question }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('advisory.show', $data->id) }}"> التفاصيل </a>
                                <img src="{{ asset('website-assets/imgs/logo.png') }}" width="16" height="16"
                                    alt="logo" class="logo" />
                            </div>
                            <a href="" class="linkPerson">
                                <img src="{{ asset('storage/' . $data->star->s_image) }}" width="32" height="32"
                                    alt="person" class="person" />
                            </a>
                        </div>
                    </div>
                @endforeach 
                   @foreach ($this->related2    as $data)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="boxFatwa">
                            <img src="{{ asset('storage/' . $data->related2->cover_image) }}" width="100"
                                height="100" alt="img" class="imgFatwa" />
                            <div class="text">
                                <p>
                                    {{ $data->related2->advisory_question }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('advisory.show', $data->related2->id) }}"> التفاصيل </a>
                                <img src="{{ asset('website-assets/imgs/logo.png') }}" width="16" height="16"
                                    alt="logo" class="logo" />
                            </div>  
                            <a href="" class="linkPerson">
                                <img src="{{ asset('storage/' . $data->star->s_image) }}" width="32" height="32"
                                    alt="person" class="person" />
                            </a>
                        </div>
                    </div>
                @endforeach  


            </div>
        </div>
    </div>




</div>
