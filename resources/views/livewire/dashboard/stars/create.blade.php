<div>

    <x-slot:crumb>
        <x-breadcrumb button :route="route('stars.index')" :label="__('customTrans.stars list')">
            <li class="breadcrumb-item"><a href="{{ route('stars.index') }}"
                    class="text-muted">{{ __('customTrans.stars list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('stars.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>



    <div class="card card-custom border">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                  اسم النجم او الكاتب ولقبه

                </h3>
            </div>
        </div>
        <div class="card-body row ">
             <x-select wire:model='name_title_id' name="name_title_id" :options="$this->titleNames->pluck('status_name', 'id')"   label
                divWidth='2'></x-select>  

            <x-input wire:model='star_name' name='star_name' label divWidth='3' span class="error-message"
                description_field="5 حروف على الاقل" req></x-input>

            <x-select wire:model='star_type_id' name='star_type_id' :options="$this->starTypes->pluck('status_name', 'id')"   label
                divWidth='2'></x-select>


            <x-input wire:model='description' name='description' label divWidth='3' span
                description_field="الوصف العلمي او الوظيفي"></x-input>
        </div>
    </div>

    <div class="card card-custom border my-4">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.content type') }}


                </h3>
            </div>
        </div>


        <div class="d-lg-flex mx-5">
            @foreach ($this->contentTypes as $title)
                <x-checkbox wire:model='content_type' name="content_type"  :id="$title->id" label :labelname="$title->status_name"
                    :value="$title->status_name"></x-checkbox>
            @endforeach
        </div>





        <p class="m-5"> {{ __('customTrans.add content type') }} <span><a href="{{ route('status') }}"
                    target="_blank">{{ __('customTrans.here') }} </a> </span></p>

    </div>

    <div class="card card-custom border my-4">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.about star') }}

                </h3>
            </div>
        </div>



        <x-textarea wire:model='about_content_star' name='about_content_star' data-provide="markdown" divWidth='10'
            rows='10' divclass="my-4 "></x-textarea>

        <div>
            {{-- <label for="file" class="text-center w-100 my-5 card-title">{{__('customTrans.profile image')}}</label> --}}
            <h4 class="card-label my-4" style="margin-right: 22px;">
                {{ __('customTrans.s_image') }}

            </h4>
            <x-filepond::upload wire:model="s_image" name="s_image" required='true' allowFileSizeValidation
                maxFileSize='1024KB' class="@error('s_image') is-invalid   @enderror m-5 " />
            @include('partials.general._show-error', ['field_name' => 's_image'])

        </div>


    </div>


    {{-- <div class="card card-custom border my-4">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.most common and related') }}


                </h3>
            </div>
        </div>

        <div>
            <div>


                <div class=" px-5 m-5 " name="properties" id="properties">

                    @foreach ($attributeValue as $index => $question)
                        <div class=" row align-items-center  w-100">

                            <Select @class(['form-control  w-25 ']) wire:model='attributeColumn.{{ $index }}'>
                                <option value="">اختار اعمدة</option>

                                @foreach ($all_templates ?? [] as $template1)
                                    <option value="{{ $template1->id }}">
                                        {{ $template1->status_name }}
                                    </option>
                                @endforeach
                            </Select>


                            <x-input wire:model="attributeValue.{{ $index }}"
                                name="attributeValue{{ $index }}" divWidth="4" marginBottom="0"
                                :placeholder="__('customTrans.value')"></x-input>

                            <x-input wire:model="url.{{ $index }}" name="url{{ $index }}" divWidth="4"
                                marginBottom="0" :placeholder="__('customTrans.url')"></x-input>

                            <x-actions mins wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                        </div>
                    @endforeach

                </div>



                <x-actions plus wire:click.prevent='addQuestion'></x-actions>



                <p class="m-5"> {{ __('customTrans.add new colums') }} <span><a href="{{ route('status') }}"
                            target="_blank">{{ __('customTrans.here') }} </a> </span></p>



            </div>


        </div>

    </div> --}}







    <div class="modal-footer " style="border-top:none;">

        <x-button default_class="btn ripple btn-secondary" data-dismiss="modal" label=close type="button">
        </x-button>

        <x-button wire:click.prevent='store' default_class="btn ripple btn-primary" data-dismiss="modal"
            style="width: 100px; height: 38px; font-size:13px;"></x-button>
    </div>

    @if ($errors->any())
    @foreach ($errors->all(':message') as $error)
        <div class="text-right">
            <li class="text-danger"><small>{{ $error }}</small></li>
        </div>
    @endforeach
@endif


    @filepondScripts

    @push('js')
        <script>
            window.addEventListener('pondReset', e => {

                location.reload()
            });
        </script>


        {{-- <script src="{{ asset('template-assets/metronic7/js/pages/crud/forms/widgets/select2.js') }}"></script> --}}

        <script>
            window.addEventListener('page-reload', event => {
                location.reload();
            })
        </script>
    @endpush
</div>
