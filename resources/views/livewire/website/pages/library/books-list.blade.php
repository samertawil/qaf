<div>



    <x-breadcrumb-website :pageTitle="__('customTrans.library')">

        <a href="{{ route('programs.list') }}" class="text-muted">{{ __('customTrans.books list') }} </a>

    </x-breadcrumb-website>



    <div class="loader">
        <img src="{{ asset('website-assets/imgs/logo-color.svg') }}" width="100" height="100" alt="logo" />
    </div>






    <div class="container-lg py-4">
        <div class="row">
            <div class="col-12">
                <h2 class="titleSection titleSection2">
                    وهي المكتبة الرقمية لقاف تجدون بها مجموعة من المواد العلمية النافعة لأبرز نجوم قاف
                </h2>
            </div>
        </div>
    </div>

    <div class="pSection" style="background-color: #fff;">
        <div class="container-lg">

            <div class="row mb-4">
                <div class="col-12">
                    <div class="d-flex">
                        <div class="tabs">
                            <span class="active" span-key="0">
                                الكل
                            </span>
                            <span span-key="a">
                                الأخبار
                            </span>
                            <span span-key="b">
                                رسائل الماجستير
                            </span>
                            <span span-key="c">
                                رسائل الدكتوراة
                            </span>
                            <span span-key="d">
                                غير مصنف
                            </span>
                            <span span-key="e">
                                كتب
                            </span>
                            <span span-key="f">
                                مقالات
                            </span>
                            <span span-key="g">
                                ملخصات
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                @forelse ( $this->books as  $book)
                <div class="col-lg-3 col-md-4 col-sm-6" div-key="a">
                    <a href="{{route('book.show',$book->id)}}" class="boxFatwa">
                        <img src="{{asset('storage/'.$book->cover_image)}}" width="100" height="100" alt="img" class="imgFatwa" />
                        <div class="text">
                            <p>
                              {{$book->book_name}}
                            </p>
                        </div>
                        <span class="hash">
                            # الأخبار
                        </span>
                    </a>
                </div>  
                @empty
                    <p>{{__('customTrans.no data found')}}</p>
                @endforelse 
                    
            
             
          
            </div>
        </div>
    </div>



 
 


</div>
