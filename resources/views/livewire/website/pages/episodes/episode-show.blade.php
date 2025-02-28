 <div>



     <div class="container-lg">
         <div class="breadCrumb">
             <div class="row">
                 <div class="col-custom">

                     <h1> {{ $this->episode['program_name'] . ' | ' . $this->episode['content_start'] . ' | الحلقة' . $this->episode['e_no'] . ' | ' . $this->episode['e_name'] }}
                     </h1>

                     <div class="links">
                         <a href=""> الرئيسية </a>
                         <a href="">
                             طريق نور | د.عبد الله رشدي | الحلقة 2 | تسلط الآباء
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="loader">
         <img src="./imgs/logo-color.svg" width="100" height="100" alt="logo" />
     </div>

     <!-- Content  -->

     <div class="container-lg pSection">
         <div class="row">

             <div class="col-12 mt-4">
                 <div class="contentFatwa">

                     @if ($this->episode['url'])
                         <div class="boxYoutube">
                             <iframe width="560" height="315" src="{{ $this->episode['url'] }}"
                                 title="YouTube video player" frameborder="0"
                                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                 referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                         </div>
                     @else
                         <div class="col-12">
                             <div class="boxMainImage">


                                 <img src="{{ asset('storage/' . $this->episode->cover_image) }}" width="100"
                                     height="100" alt="img" class="img" />

                                 <img src="{{ asset('website-assets/imgs/logo.png') }}" width="32" height="32"
                                     alt="logo" class="logo" />

                             </div>
                         </div>
                     @endif



                     <p class="mb-4">
                         هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                         هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو
                         العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                         التطبيق.
                         <br />
                         إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى
                         زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء
                         لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                         يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم
                         الموقع.
                         <br />
                         ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل
                         الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن
                         نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا
                         يليق.
                         <br />
                         هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه
                         نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم.
                         <br />
                         لأنه مازال نصاً بديلاً ومؤقتاً.
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
                         حلقات البرنامج
                     </h2>
                 </div>
                 <div class="col-auto">
                     <div class="actionPrevNext">
                        @isset( $this->pre->e_no)
                        <a href=""> {{ $this->pre->e_no  }} </a>
                        @endisset
                         

                         <span class="mx-3"> تشاهد الحلقة {{ $this->episode['e_no'] }} </span>
                         @isset ( $this->next->e_no )
                         <a href=""> {{ $this->next->e_no }} </a>
                         @endisset
                       
                     </div>
                 </div>
             </div>
             <div class="swiperAnotherEpisodes">
                 <div class="row gy-4">
                     <div class="col-lg-12">
                         <div class="swiper">
                             <div class="swiper-wrapper">
                                 @foreach ($episodes as $Currentprogram)
                                     <div class="swiper-slide">
                                         <div class="boxProgram">
                                             <div class="boxImg">
                                                 <img src="{{ asset('storage/' . $Currentprogram->cover_image) }}"
                                                     width="100" height="100" alt="img" class="img" />
                                                 <h2> {{ $Currentprogram->e_no }}</h2>
                                                 <a href="" class="linkPerson">
                                                     <img src="{{ asset('storage/' . $Currentprogram->star->s_image) }}"
                                                         width="32" height="32" alt="person" class="person" />

                                                 </a>
                                             </div>
                                             <div class="details">


                                                 <p> {{ $Currentprogram->program_name . ' | ' . $Currentprogram->content_start . ' | الحلقة' . $Currentprogram->e_no . ' | ' . $Currentprogram->e_name }}
                                                 </p>


                                                 <a href="{{route('episode.show',$Currentprogram->id)}}" class="btnFill btnFill2"> مشاهدة الحلقة </a>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach


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
     </div>

     {{-- <div class="mainPrograms pSection">
         <div class="container-lg">
             <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                 <div class="col-auto">
                     <h2 class="titleSection">
                         <img src="./imgs/logo-color2.svg" width="16" height="16" alt="logo"
                             class="me-2" />
                         برامج أخرى
                     </h2>
                 </div>
             </div>
             <div class="row gy-4">
                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="boxProgram">
                         <div class="boxImg">
                             <img src="./imgs/swiper1.jpg" width="100" height="100" alt="img"
                                 class="img" />
                             <h2>ليتفقهوا في الدين</h2>
                             <a href="" class="linkPerson">
                                 <img src="./imgs/person.jpg" width="32" height="32" alt="person"
                                     class="person" />
                             </a>
                         </div>
                         <div class="details">
                             <p>
                                 عدد الحلقات: 14
                             </p>
                             <a href="" class="btnFill btnFill2">
                                 عرض الحلقات
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="boxProgram">
                         <div class="boxImg">
                             <img src="./imgs/swiper2.jpg" width="100" height="100" alt="img"
                                 class="img" />
                             <h2>
                                 طريق نور
                             </h2>
                             <a href="" class="linkPerson">
                                 <img src="./imgs/person.jpg" width="32" height="32" alt="person"
                                     class="person" />
                             </a>
                         </div>
                         <div class="details">
                             <p>
                                 عدد الحلقات: 14
                             </p>
                             <a href="" class="btnFill btnFill2">
                                 عرض الحلقات
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-4 col-sm-6">
                     <div class="boxProgram">
                         <div class="boxImg">
                             <img src="./imgs/swiper3.jpg" width="100" height="100" alt="img"
                                 class="img" />
                             <h2>
                                 اسم البرنامج
                             </h2>
                             <a href="" class="linkPerson">
                                 <img src="./imgs/person.jpg" width="32" height="32" alt="person"
                                     class="person" />
                             </a>
                         </div>
                         <div class="details">
                             <p>
                                 عدد الحلقات: 14
                             </p>
                             <a href="" class="btnFill btnFill2">
                                 عرض الحلقات
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> --}}

     <!-- Content  -->



 </div>
