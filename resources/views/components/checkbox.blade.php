 @props([
    'name' => '',
    'type' => 'checkbox',
    'id' =>$name,
    'labelclass' => '',
    'description_field'=>'',
    'label'=>'',
    'labelname'=>'',
    'divMargin'=>'5',
    'divclass'=>'',
    
])


 
<div class="row mb-1  ">

    <div @class(['col-md-6',"m-$divMargin",$divclass])>

        <div class="form-check">
            
            <input name="{{ $name }}" type="checkbox" id="{{ $id }}" {{ old($name) ? 'checked' : '' }}
                {{ $attributes->class(['form-check-input  ', 'is-invalid' => $errors->has($name)]) }} style=" 
               
                height: 18px;
                width: 18px; ">
            <small class="text-muted">{{ $description_field }}</small>

            @include('partials.general._show-error', ['field_name' => $name])


            @if ($label)
                <label for="{{ $id }}"
                    @class(["form-check-label  ml-4 $labelclass "])>{{ $labelname ? $labelname : __("customTrans.$name") }}</label>
            @endif



        </div>
    </div>
</div>


{{-- background-color:#EBEDF3;
 border: 1px solid transparent;
 height: 18px;
 width: 18px; --}}