 <div>
 
    
           
     <div class="fatwa pSection">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                <div class="col-auto">
                    <h2 class="titleSection titleSection2">
                        <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="16" height="16"
                            alt="logo" class="me-2" />
                        قسم الفتوى
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="" class="btnFill"> عرض الكل </a>
                </div>
            </div>
            <div class="row gy-4">
                @foreach ($this->advisories as $advisory)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="boxProgram">
                        <div class="boxImg">
                            <img src="{{ asset('storage/' . $advisory->cover_image) }}" width="100"
                                height="100" alt="img" class="img" />

                            <a href="" class="linkPerson">
                                @if ($advisory->content_start)
                                    <img src="{{ asset('storage/' . $advisory->star->s_image) }}" width="32"
                                        height="32" alt="person" class="person" />
                                @endif

                            </a>
                        </div>
                        <div class="details">
                            <p>
                                {{ $advisory->advisory_name . ' | ' . $advisory->advisory_question }}

                            </p>
                            <a href="{{ route('advisory.show', $advisory->id) }}" class="btnFill btnFill2">
                                مشاهدة الحلقة
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>


 </div>
