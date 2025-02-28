<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('advisories.index')" :label="__('customTrans.advisories list')">
            <li class="breadcrumb-item"><a href="{{ route('advisories.index') }}"
                    class="text-muted">{{ __('customTrans.advisories list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('advisories.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>

    <div class="card card-custom border">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.advisory name and desc') }}

                </h3>
            </div>
        </div>
        <div class="card-body row justify-content-between">


            <x-input wire:model='advisory_name' name='advisory_name' label divWidth='4'></x-input>

            <x-input wire:model='advisory_title' name='advisory_title' label divWidth='5'></x-input>

            <x-select wire:model='content_category' name="content_category" :options="$this->contentCategories->pluck('status_name', 'status_name')" label></x-select>


            <p class="m-5"> {{ __('customTrans.add advisory type') }} <span><a href="{{ route('status') }}"
                        target="_blank">{{ __('customTrans.here') }} </a> </span></p>



        </div>
    </div>



    <div class="card card-custom border ">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.advisory') }}

                </h3>
            </div>
        </div>

        <div class="card-body row align-items-center ">

            <x-input wire:model='advisory_question' name='advisory_question' label divWidth='12'></x-input>

            <x-textarea wire:model='advisory_answer' name='advisory_answer' data-provide="markdown" label divWidth='12'
                rows="12"></x-textarea>


            <div class="form-group mt-4 mx-3">
                <label> {{ __('customTrans.media_type_upload') }}</label>
                <div class="radio-inline">
                    <label class="radio radio-primary">
                        <input type="radio" wire:model='media_type' name='media_type' checked="checked"
                            value="1">
                        <span></span>
                        {{ __('customTrans.url') }}
                    </label>
                    <label class="radio radio-danger">
                        <input type="radio" wire:model='media_type' name='media_type' value="0">
                        <span></span>
                        {{ __('customTrans.upload video') }}
                    </label>
                </div>
            </div>

            <x-input wire:model='url' name='url' label divWidth='4'></x-input>

            <x-input type="date" wire:model='stream_date' name='stream_date' label divWidth='2'></x-input>

            <x-input wire:model='media_duration' name='media_duration' label divWidth='2'></x-input>


        </div>
    </div>



    <div class="card card-custom border ">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.media data') }}

                </h3>
            </div>
        </div>

        <div class="card-body row align-items-center  ">
            <div class="form-group mt-4 col-4">
                <x-select wire:model='star_id' name="star_id" :options="$this->contentStar->pluck('star_name', 'id')" label class="form-control mt-2"
                    divWidth="10" label></x-select>
            </div>

            <div class="form-group mt-4 col-4">
                <x-select multiple="" wire:model='similar_a' name="similar_a" :options="$this->similarEpisodes->pluck('advisory_name', 'id')"
                    class="form-control mt-2 " divWidth="10" label id="exampleSelect2"></x-select>
            </div>

            <x-textarea wire:model='notes' name='notes' label divWidth='4' rows="4"></x-textarea>
        </div>
    </div>

    <div class="card card-custom border ">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.tools and help') }}

                </h3>
            </div>
        </div>
        <div class="card-body d-lg-flex align-items-center justify-content-between ">


            <div class="form-group mx-5">
                <label> {{ __('customTrans.activation') }}</label>
                <div class="radio-inline">
                    <label class="radio radio-primary">
                        <input type="radio" wire:model='active' name='active' checked="checked" value="1">
                        <span></span>
                        {{ __('customTrans.active') }}
                    </label>
                    <label class="radio radio-danger">
                        <input type="radio" wire:model='active' name='active' value="0">
                        <span></span>
                        {{ __('customTrans.not active') }}
                    </label>
                </div>
            </div>


            <div class="form-group mx-5">
                <label>{{ __('customTrans.favorite') }}</label>
                <div class="checkbox-inline">
                    <label class="checkbox">
                        <input type="checkbox" wire:model='favorite' name='favorite'>
                        <span></span>
                        {{ __('customTrans.add favorite') }}
                    </label>
                </div>
            </div>



            <x-input wire:model='hot_feed' name='hot_feed' label divWidth='4'></x-input>

            <x-input wire:model='hot_description' name='hot_description' label divWidth='4'></x-input>

        </div>
    </div>

    <div class="card card-custom border">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.cover image') }}

                </h3>
            </div>
        </div>
        <div class="card-body  ">

            @if ($type == 'update')
                <div>
                    @if ($cover_image_preview)
                        <div class="" style="height: 250px; width: 250px; margin-top:10px; margin:auto"
                            class="d-flex  justify-content-start ">

                            <a href="{{ asset('storage/' . $cover_image_preview) }}" target="_blank">
                                <img src="{{ asset('storage/' . $cover_image_preview) }}"
                                    style="height: 100%;width: 100%; padding-left:20px;">
                            </a>


                        </div>
                    @endif

                </div>
            @endif

            <div>
                <x-filepond::upload wire:model="cover_image" name="cover_image" required='true'
                    allowFileSizeValidation maxFileSize='1024KB'
                    class="@error('cover_image') is-invalid   @enderror m-5 " />
                @include('partials.general._show-error', ['field_name' => 'cover_image'])

            </div>

        </div>

    </div>


    <div class="card card-custom border my-4">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.most common and related') }}


                </h3>
            </div>
        </div>


        @if ($type == 'update')
            @foreach ($relatedData ?? [] as $data)
                <div class="d-flex align-items-center m-5">

                    <p class="text-primary mx-2">عنوان الفتوى : </p>
                    <p>{{ $data->advisory_name }}
                    <p class="text-primary mx-2"> المفتي : </p>
                    <p>{{ $data->content_start }}</p>
                    <p>{{ $data->id }}</p>

                    <a wire:loading.attr='disabled' class="btn btn-lg text-danger pt-0 mt-0 "
                        wire:confirm.prompt="{{ __('customTrans.please insert name of advisory for del') }}\n|{{ $data->advisory_name }}"
                        wire:click.prevent='destroy({{ $data->id }})'> <i class="ti-trash text-danger"></i>
                    </a>


                </div>
            @endforeach
        @endif


        <div>
            <div>


                <div class=" px-5 m-5 " name="properties" id="properties">

                    @foreach ($attributeValue as $index => $question)
                        <div class=" row align-items-center  w-100">

                            <Select @class(['form-control  w-25 ']) wire:model='attributeColumn.{{ $index }}'>
                                <option value="">اختار اعمدة</option>

                                @foreach ($all_templates->where('id','!=',$advisoryId) ?? [] as $template1)
                                    <option value="{{ $template1->id }}">
                                        {{ $template1->advisory_name }}
                                    </option>
                                @endforeach
                            </Select>


                            <x-input wire:model="attributeValue.{{ $index }}"
                                name="attributeValue{{ $index }}" divWidth="4" marginBottom="0"
                                :placeholder="__('customTrans.value')"></x-input>

                            <x-input wire:model="url.{{ $index }}" name="url{{ $index }}"
                                divWidth="4" marginBottom="0" :placeholder="__('customTrans.url')"></x-input>

                            <x-actions mins wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                        </div>
                    @endforeach

                </div>



                <x-actions plus wire:click.prevent='addQuestion'></x-actions>



                <p class="m-5"> {{ __('customTrans.add new colums') }} <span><a href="{{ route('status') }}"
                            target="_blank">{{ __('customTrans.here') }} </a> </span></p>



            </div>


        </div>


    </div>

      
    <div class="modal-footer " style="border-top:none;">

      
        <x-button wire:click.prevent="{{ $type }}" label="{{ $type }}"
            default_class="btn ripple btn-primary" data-dismiss="modal"
            style="width: 100px; height: 38px; font-size:13px;"></x-button>
    </div>  
 

   


    @include('layouts._show_errors_all')

    @filepondScripts
    @push('js')
        <script>
            window.addEventListener('pondReset', e => {

                location.reload()
            });
        </script>

        <script>
            window.addEventListener('page-reload', event => {
                location.reload();
            })
        </script>
    @endpush
</div>
