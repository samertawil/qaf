<div>

    <x-slot:crumb>
        <x-breadcrumb>

            <li class="breadcrumb-item"><a href="{{ route('citzen.services.index') }}"
                    class="text-muted">{{ __('customTrans.services index') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('citzen.services.resouces') }}"
                    class="text-muted">{{ __('customTrans.services resource') }} </a></li>

        </x-breadcrumb>

    </x-slot:crumb>


    <div class="row">

        <div class="col-6">
            <x-input type='number' min='1' wire:model='num' name='num' label :labelname="__('customTrans.service num')"
                divWidth='8'></x-input>

            <x-input wire:model='name' name='name' label :labelname="__('customTrans.service name')" divWidth='8'></x-input>

            <x-input wire:model='url' name='url' label divWidth='8'></x-input>

            <x-input wire:model='status_id' name='status_id' label divWidth='8'></x-input>

            <x-input wire:model='Responsible' name='Responsible' :labelname="__('customTrans.services Responsible')" label divWidth='8'></x-input>
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

                <x-radio wire:model='active' name='active' :value1='1' :value2='0' label :labelname="__('customTrans.activation')"
                    :value_title1="__('customTrans.active')" :value_title2="__('customTrans.not active')" divclass="mt-5"></x-radio>


                <x-input wire:model='route_name' name='route_name' divlclass="mt-4" label divWidth='5'></x-input>

            </div>

        </div>
    </div>

    <div class="row">
        <x-textarea wire:model='description' name='description' label divWidth='6' rows='4'></x-textarea>

        <x-textarea wire:model='note' name='note' label :labelname="__('customTrans.note')" divWidth='6' rows='4'></x-textarea>
    </div>

    <div class="row align-items-center">

        <x-textarea wire:model='conditions' name='conditions' data-provide="markdown" label :labelname="__('customTrans.conditions')"
            divWidth='6' rows='10'></x-textarea>


        <div class="col-5">
            <x-textarea wire:model='deactive_note' name='deactive_note' label :labelname="__('customTrans.deactive_note')" divWidth='12'
                rows='4' span description_field1=" بحال ايقاف الخدمة"></x-textarea>

            <x-input type="number" min="0" wire:model='home_page_order' name='home_page_order' label
                divWidth='12'></x-input>

            <x-input wire:model='teal' name='teal' label divWidth='12'></x-input>

        </div>



    </div>
    @if ($logo1)
        {{ __('customTrans.preview') }}
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


    @if ($Card_header)
        {{ __('customTrans.preview') }}

        <img src="{{ $Card_header->temporaryUrl() }}" class="w-50 w-lg-25 h-50 h-lg-25 p-4">
    @endif

    <div class="form-group">
        <label for="Card_header">Card_header1</label>
        <input type="file" wire:model='Card_header' name="Card_header" @class ([
            ' custom-file',
            'form-control',
            'is-invalid' => $errors->has('Card_header'),
        ]) accept="image/*">

        @error('Card_header')
            <li class="invalid-feedback"> {{ $message }} </li>
        @enderror
    </div>



    <div class="row">

    </div>



    {{-- 
    <x-modal idName="PropartiesModal" :title="__('customTrans.add more proparty')">


        <livewire:AttributesList></livewire:AttributesList>


    </x-modal> --}}


    <div class="d-flex justify-content-end">

        {{-- <x-button class="mx-2" data-target="#PropartiesModal" data-toggle="modal" label="add more proparty">
        </x-button> --}}


        <x-button default_class="btn ripple btn-light-primary" style="width: 100px;"
            wire:click.prevent='store'></x-button>
    </div>


    {{-- ////////////////////////////// --}}



    {{-- <div>
        
            <div class="pr-3" name="properties" id="properties">

            @foreach ($attributeValue as $index => $question)
                <div class=" row align-items-center">

                    <Select @class(['form-control  w-25']) wire:model='attributeColumn.{{ $index }}'>
                        <option value="">اختار اعمدة</option>

                        @foreach ($all_templates2 ?? [] as $template1)
                            <option value="{{ $template1->status_name }}">
                                {{ $template1->status_name }}
                            </option>
                        @endforeach
                    </Select>

                    <x-input type="file" wire:model="attributeValue.{{ $index }}"
                        name="attributeValue{{ $index }}" divWidth="4" marginBottom="0"></x-input>

                    <x-actions mins wire:click.prevent='removeQuestion({{ $index }})'></x-actions>

                </div>
            @endforeach

        </div>

        <x-actions plus wire:click.prevent='addQuestion'></x-actions>

        <p> {{ __('customTrans.add new colums') }} <span><a href="{{ route('status') }}"
          target="_blank">{{ __('customTrans.here') }} </a> </span></p>

    </div>   --}}




</div>
