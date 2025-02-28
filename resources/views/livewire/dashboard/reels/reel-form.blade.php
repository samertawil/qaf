<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('reels.index')" :label="__('customTrans.reels list')">
            <li class="breadcrumb-item"><a href="{{ route('reels.index') }}"
                    class="text-muted">{{ __('customTrans.reels list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('reels.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>


    <div class="card card-custom border">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.basic data') }}

                </h3>
            </div>
        </div>
        <div class="card-body row align-items-center ">

            <x-input wire:model='reel_name' name='reel_name' label divWidth='4'></x-input>
            <x-input wire:model='reel_title' name='reel_title' label divWidth='8'></x-input>
            <x-select wire:model='reel_category_id' name="reel_category_id" :options="$this->contentCategories->pluck('status_name', 'id')" class="form-control "
                divWidth="2" label></x-select>

            <x-select wire:model='social_media_id' name="social_media_id" :options="$this->socialMediaName->pluck('status_name', 'id')" class="form-control  "
                divWidth="2" label></x-select>

                 
            <div class="form-group mx-5 mt-4">
                <label> {{ __('customTrans.media_type_id') }}</label>
                <div class="radio-inline">
                    <label class="radio radio-primary">
                        <input type="radio" wire:model='media_type_id' name='media_type_id'   value="1">
                        <span></span>
                        {{ __('customTrans.video') }}
                    </label>
                    <label class="radio radio-success">
                        <input type="radio" wire:model='media_type_id' name='media_type_id' value="2">
                        <span></span>
                        {{ __('customTrans.image') }}
                    </label>
                </div>
            </div>

            <x-input wire:model='url' name='url' label divWidth='6'></x-input>

            


           

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
                   class="@error('cover_image') is-invalid   @enderror m-5 " />
                @include('partials.general._show-error', ['field_name' => 'cover_image'])

            </div>

        </div>

    </div>



    <div class="modal-footer " style="border-top:none;">

        <x-button default_class="btn ripple btn-secondary" data-dismiss="modal" label=close type="button">
        </x-button>


        <x-button wire:click.prevent="{{$type}}" default_class="btn ripple btn-primary" data-dismiss="modal"
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
    @endpush
</div>
