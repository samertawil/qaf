 <div>
 
 <x-breadcrumb-website :pageTitle="__('customTrans.episode')">

    <a href="#" class="text-muted">{{$programName }} </a>

</x-breadcrumb-website> 


       <div class="loader">
         <img src="./imgs/logo-color.svg" width="100" height="100" alt="logo" />
     </div>  



     <div class="mainPrograms pSection">
         <div class="container-lg">
             <div class="row align-items-center justify-content-between mb-4 mb-lg-5">
                 <div class="col-auto">
                     <h2 class="titleSection">
                       
                         <img src="{{ asset('website-assets/imgs/logo-color2.svg') }}" width="16" height="16"
                             alt="logo" class="me-2" />

                             الحلقات
                     </h2>
                 </div>
             </div>
             <div class="row gy-4">

                 @foreach ($episodes as $episode)
                     <div class="col-lg-3 col-md-4 col-sm-6">
                         <div class="boxProgram">
                             <div class="boxImg">
                                 <img src="{{ asset('storage/' . $episode->cover_image) }}" width="100"
                                     height="100" alt="img" class="img" />
                                 <h2>
                                     {{ $episode->e_no }}
                                 </h2>
                                 <a href="" class="linkPerson">
                                     @if ($episode->content_start)
                                         <img src="{{ asset('storage/' . $episode->star->s_image) }}" width="32"
                                             height="32" alt="person" class="person" />
                                     @endif

                                 </a>
                             </div>
                             <div class="details">
                                 <p>
                                     {{ $episode->program_name . ' | ' . $episode->content_start . ' | الحلقة' . $episode->e_no . ' | ' . $episode->e_name }}

                                 </p>
                                 <a href="{{route('episode.show',$episode->id)}}" class="btnFill btnFill2">
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
