<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('library.index')" :label="__('customTrans.advisories list')">
            <li class="breadcrumb-item"><a href="{{ route('library.index') }}"
                    class="text-muted">{{ __('customTrans.books list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('library.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>

    <div class="card card-custom border">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.book name and desc') }}

                </h3>
            </div>
        </div>
        <div class="card-body row justify-content-between">


            <x-input wire:model='book_name' name='book_name' label divWidth='3'></x-input>


            <x-select wire:model='writer_id' name='writer_id' label divWidth='3' :options="$this->contentStar->pluck('star_name', 'id')"></x-select>

            <x-select wire:model='book_category_id' name="book_category_id" :options="$this->contentCategories->pluck('status_name', 'id')" label></x-select>

            <x-input wire:model='book_title' name='book_title' label divWidth='3'></x-input>

            <p class="m-5"> {{ __('customTrans.add book type') }} <span><a href="{{ route('status') }}"
                        target="_blank">{{ __('customTrans.here') }} </a> </span></p>



        </div>
    </div>



    <div class="card card-custom border ">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.book data') }}

                </h3>
            </div>
        </div>

        <div class="card-body row align-items-center justify-content-between ">



            <x-input type="date" wire:model='publish_date' name='publish_date' label divWidth='2'></x-input>

            <x-input type="number" min="1" wire:model='paper_count' name='paper_count' label
                divWidth='2'></x-input>


            <div class="form-group mt-4 col-4">
                <x-select multiple="" wire:model='similar_b' name="similar_b" :options="$this->similarBooks->pluck('book_name', 'book_name')"
                    class="form-control mt-2 " divWidth="10" label id="exampleSelect2"></x-select>
            </div>
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

            <x-textarea wire:model='notes' name='notes' label divWidth='6' rows="4"></x-textarea>

        </div>
    </div>


    <div class="card card-custom border">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.book_attchment') }}

                </h3>
            </div>
        </div>
        <div class="card-body  ">

            <div class="boxBook text-center">
                <object class="pdf" data="{{ asset('storage/' . $book_attchment_preview) }}" width="800"
                    height="500"></object>
            </div>



            <div>
                <x-filepond::upload wire:model.live="book_attchment" name="book_attchment" required='true'
                    allowFileSizeValidation maxFileSize='102400KB'
                    class="@error('book_attchment') is-invalid   @enderror m-5 " />
                @include('partials.general._show-error', ['field_name' => 'book_attchment'])

            </div>

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




    <div class="modal-footer " style="border-top:none;">

        <x-button default_class="btn ripple btn-secondary" data-dismiss="modal" label=close type="button">
        </x-button>

        <x-button wire:click.prevent="{{ $type }}" label="{{$type}}" default_class="btn ripple btn-primary"
            data-dismiss="modal" style="width: 100px; height: 38px; font-size:13px;"></x-button>
    </div>

    @include('layouts._show_errors_all')

    @filepondScripts
    @push('js')
        <script>
            window.addEventListener('pondReset', e => {

                location.reload()
            });
        </script>
    @endpush
</div>
