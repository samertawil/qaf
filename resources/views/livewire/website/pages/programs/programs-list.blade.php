<div>



    <x-breadcrumb-website :pageTitle="__('customTrans.programs')">

        <a href="{{ route('programs.list') }}" class="text-muted">{{ __('customTrans.programs') }} </a>

    </x-breadcrumb-website>



    <div class="loader">
        <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="100" height="100" alt="logo" />
    </div>

    <!-- Content  -->

    <div class="mainPrograms pSection">
        <div class="container-lg">
            <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                <div class="col-auto">
                    <h2 class="titleSection">
                        <img src="{{ asset('website-assets/imgs/logo-color2.svg') }}" width="16" height="16" alt="logo" class="me-2" />
                        البرامج
                    </h2>
                </div>
            </div>
            <div class="row gy-4">
                @foreach ($this->programs as $program)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="boxProgram">
                            <div class="boxImg">
                                <img src="{{ asset('storage/' . $program->cover_image) }}" width="100" height="100"
                                    alt="img" class="img" />
                                <h2>{{ $program->program_name }}</h2>
                                <a href="" class="linkPerson">
                                    @if ($program->content_start)
                                        <img src="{{ asset('storage/' . $program->star->s_image) }}" width="32"
                                            height="32" alt="person" class="person" />
                                    @endif

                                </a>
                            </div>
                            <div class="details">
                                <p>
                                    عدد الحلقات: {{ $program->eCount->e_count ?? '0' }}


                                </p>

                                @isset($program->eCount->e_count)
                               
                                    <a href="{{ route('episodes.list', $program->program_name) }}" class="btnFill btnFill2">
                                        عرض الحلقات
                                    </a>
                                @endisset

                            </div>
                            <div>


                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <!-- Content  -->



</div>
