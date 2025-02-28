<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('program.episodes.index')" :label="__('customTrans.episodes list')">
            <li class="breadcrumb-item"><a href="{{ route('program.episodes.index') }}"
                    class="text-muted">{{ __('customTrans.programs list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('program.episodes.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>

    <div class="card card-custom border">
        <div class="card-header bg-secondary">
            <div class="card-title ">
                <h3 class="card-label">
                    {{ __('customTrans.episode name and desc') }}

                </h3>
            </div>
        </div>
        <div class="card-body row justify-content-between">
            <x-select wire:model='program_id' name="program_id" :options="$this->programs->pluck('program_name', 'id')" label divWidth='3' label
                :labelname="__('customTrans.program name')"></x-select>

            <x-input wire:model='e_name' name='e_name' label divWidth='4'></x-input>
            <x-input type='number' min="1" wire:model='e_no' name='e_no' label divWidth='2'></x-input>
            <x-input wire:model='e_title' name='e_title' label divWidth='4'></x-input>

            <div class="form-group mt-4 mx-3">
                <label> {{ __('customTrans.media_type_upload') }}</label>
                <div class="radio-inline">
                    <label class="radio radio-primary">
                        <input type="radio" wire:model='media_type' name='media_type' checked="checked"
                            value="url">
                        <span></span>
                        {{ __('customTrans.url') }}
                    </label>
                    <label class="radio radio-danger">
                        <input type="radio" wire:model='media_type' name='media_type' value="video">
                        <span></span>
                        {{ __('customTrans.upload video') }}
                    </label>
                </div>
            </div>

            <x-input wire:model='url' name='url' label divWidth='5'></x-input>

            <x-input type="date" wire:model='stream_date' name='stream_date' label divWidth='2'></x-input>
            <x-input wire:model='media_duration' name='media_duration' label divWidth='2'></x-input>

            <x-textarea wire:model='e_content' name='e_content' data-provide="markdown" label divWidth='12'
                rows="12"></x-textarea>



            <x-textarea wire:model='e_note' name='e_note' label divWidth='6' rows="4"></x-textarea>


          


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

        <div class="card-body row align-items-center ">
            <div class="form-group mt-4 col-4">
                <x-select   wire:model='star_id' name="star_id" :options="$this->contentStar->pluck('star_name', 'id')" label  :labelname='__("customTrans.content_start_e")'
                    class="form-control mt-2" divWidth="10" label  ></x-select>
            </div>

            <div class="form-group mt-4 col-4">
                <x-select multiple="" wire:model='similar_e' name="similar_e" :options="$this->similarEpisodes->pluck('e_name', 'e_name')"
                    class="form-control mt-2 " divWidth="10" label id="exampleSelect2"></x-select>
            </div>


            <div class="row col-3">

                @foreach ($this->contentTypes as $title)
                    <x-checkbox wire:model='content_type' name="content_type" :id="$title->id" label :labelname="$title->status_name"
                        :value="$title->status_name"></x-checkbox>
                @endforeach


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
        <div class="card-body d-lg-flex align-items-center  ">

     
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

        <x-button wire:click.prevent='store' default_class="btn ripple btn-primary" data-dismiss="modal"
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
