 <div>

     <x-breadcrumb-website :pageTitle="__('customTrans.advisories')">

         <a href="#" class="text-muted">{{__('customTrans.advisories')}} </a>

     </x-breadcrumb-website>


     {{-- <div class="loader">
         <img src="./imgs/logo-color.svg" width="100" height="100" alt="logo" />
     </div>

 --}}

     <div class="mainPrograms pSection">

         <div class="container-lg">
             <div class="row gx-2 gx-sm-3">
                 <div class="col">
                     <form action="" class="formSearchFatwa">
                         <div class="boxInput relative">
                             <input type="text" placeholder="ابحث عن السؤال والفتوى">
                             <button type="submit">
                                 <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                     <g id="SVGRepo_iconCarrier">
                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M17.0392 15.6244C18.2714 14.084 19.0082 12.1301 19.0082 10.0041C19.0082 5.03127 14.9769 1 10.0041 1C5.03127 1 1 5.03127 1 10.0041C1 14.9769 5.03127 19.0082 10.0041 19.0082C12.1301 19.0082 14.084 18.2714 15.6244 17.0392L21.2921 22.707C21.6828 23.0977 22.3163 23.0977 22.707 22.707C23.0977 22.3163 23.0977 21.6828 22.707 21.2921L17.0392 15.6244ZM10.0041 17.0173C6.1308 17.0173 2.99087 13.8774 2.99087 10.0041C2.99087 6.1308 6.1308 2.99087 10.0041 2.99087C13.8774 2.99087 17.0173 6.1308 17.0173 10.0041C17.0173 13.8774 13.8774 17.0173 10.0041 17.0173Z"
                                             fill="#fff"></path>
                                     </g>
                                 </svg>
                             </button>
                         </div>
                     </form>
                 </div>
                 <div class="col-auto">
                     <a href="javascript:void(0)" class="btnFill btnFill2 showBoxStep2">
                         لدي سؤال
                     </a>
                 </div>
             </div>
             <div class="row align-items-center justify-content-between my-4 my-lg-5">
                 <div class="col-auto">
                     <h2 class="titleSection">

                         <img src="http://127.0.0.1:8000/website-assets/imgs/logo-color2.svg" width="16"
                             height="16" alt="logo" class="me-2">

                         الفتاوى
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
                         <h4>تصنيف حسب:</h4>
                         <form action="">
                             <select wire:model.live='SearchStarName' name="SearchStarName">
                                 <option value="">اسم المفتي</option>
                                 @foreach ($this->stars as $star)
                                     <option value="{{ $star->id }}">{{ $star->star_name }}</option>
                                 @endforeach
                             </select>

                             <select wire:model.live='AdvisoryTypeName' name="AdvisoryTypeName" class="active">
                                 <option value="">تصنيف الفتوى</option>
                                 @foreach ($this->contentCategories as $category)
                                     <option value="{{ $category->status_name }}">{{ $category->status_name }}</option>
                                 @endforeach
                             </select>
                             <input type="checkbox" id="mostWatched" hidden="">
                             <label for="mostWatched"> الأكثر مشاهدة </label>
                         </form>
                     </div>
                     <div class="bg"></div>
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
