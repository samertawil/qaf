<div>

    <x-slot:crumb>
        <x-breadcrumb>

            <li class="breadcrumb-item"><a href="{{ route('citzen.services.index') }}"
                    class="text-muted">{{ __('PFBS.services index') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('citzen.services.resouces') }}"
                    class="text-muted">{{ __('PFBS.services resource') }} </a></li>

        </x-breadcrumb>

    </x-slot:crumb>


    <div class="row">

        <div class="col-6">
            <x-input type='number' min='1' wire:model='num' name='num' label :labelname="__('PFBS.service num')" divWidth='8'
                disabled></x-input>

            <x-input wire:model='name' name='name' label :labelname="__('PFBS.service name')" divWidth='8'></x-input>

            <x-input wire:model='url' name='url' label divWidth='8'></x-input>

            <x-input wire:model='status_id' name='status_id' label divWidth='8'></x-input>

            <x-input wire:model='Responsible' name='Responsible' :labelname="__('PFBS.services Responsible')" label divWidth='8'></x-input>
        </div>

        <div class="col-6">

            <x-input type='date' wire:model='url_active_from_date' name='url_active_from_date' label
                divWidth='8'></x-input>

            <x-input type='date' wire:model='url_active_to_date' name='url_active_to_date' label
                divWidth='8'></x-input>

            <x-input type='date' wire:model='active_from_date' name='active_from_date' label
                divWidth='8'></x-input>

            <x-input type='date' wire:model='active_to_date' name='active_to_date' label divWidth='8'></x-input>

            <div class="d-md-flex">

                <x-radio wire:model='active' name='active' :value1='1' :value2='0' label :labelname="__('PFBS.activation')"
                    :value_title1="__('PFBS.active')" :value_title2="__('PFBS.not active')" divclass="mt-5"></x-radio>


                <x-input wire:model='route_name' name='route_name' divlclass="mt-4" label divWidth='5'></x-input>

            </div>

        </div>
    </div>

    <div class="row">
        <x-textarea wire:model='description' name='description' label divWidth='6' rows='4'></x-textarea>

        <x-textarea wire:model='note' name='note' label :labelname="__('PFBS.note')" divWidth='6' rows='4'></x-textarea>
    </div>

    <div class="row align-items-center">

        <x-textarea wire:model='conditions' name='conditions' data-provide="markdown" label :labelname="__('PFBS.conditions')"
            divWidth='6' rows='10'></x-textarea>


        <div class="col-5">
            <x-textarea wire:model='deactive_note' name='deactive_note' label :labelname="__('PFBS.deactive_note')" divWidth='12'
                rows='4' span description_field1=" بحال ايقاف الخدمة"></x-textarea>

            <x-input type="number" min="0" wire:model='home_page_order' name='home_page_order' label
                divWidth='12'></x-input>

            <x-input wire:model='teal' name='teal' label divWidth='12'></x-input>

        </div>



    </div>


    @if ($logo1)
        {{ __('PFBS.preview') }}
        @foreach ($logo1 as $image)
            <img src="{{ $image->temporaryUrl() }}" class="w-50 w-lg-25 h-50 h-lg-25 p-4">
        @endforeach

    @endif


    <div class="form-group">
        <label for="logo1">اضافة صورة 1</label>
        <input type="file" wire:model='logo1' name="logo1[]" @class ([
            ' custom-file',
            'form-control',
            'is-invalid' => $errors->has('logo1.*'),
        ]) accept="image/*" multiple>

        @error('logo1.*')
            <li class="invalid-feedback"> {{ $message }} </li>
        @enderror
    </div>


    @if ($card_header)
        {{ __('PFBS.preview') }}
        <img src="{{ $card_header->temporaryUrl() }}" class="w-50 w-lg-25 h-50 h-lg-25 p-4">
    @endif

    <div class="form-group">
        <label for="card_header">{{ __('PFBS.card_header') }}</label>
        <input type="file" wire:model='card_header' name="card_header" @class ([
            ' custom-file',
            'form-control',
            'is-invalid' => $errors->has('card_header'),
        ]) accept="image/*">

        @error('card_header')
            <li class="invalid-feedback"> {{ $message }} </li>
        @enderror
    </div>




    <div div class="d-flex justify-content-end align-items-center">

        <x-cancel-back class="btn ripple btn-light-warning" :route="route('citzen.services.index')"></x-cancel-back>

        <x-button default_class="btn ripple btn-light-primary" style="width: 100px;"
            wire:click.prevent='update'></x-button>
    </div>



</div>
