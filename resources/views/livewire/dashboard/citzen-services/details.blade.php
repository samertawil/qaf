<div>


    <span style="  font-weight: bold;">{{ __('PFBS.activation') }}</span> :
    {{ $active == 1 ? __('PFBS.active') : __('PFBS.not active') }}
    <br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.services Responsible') }}</span> : {{ $Responsible }}
    <br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.url_active_from_date') }}</span> :{{ $url_active_from_date }} / /

    <span style="  font-weight: bold;">{{ __('PFBS.url_active_to_date') }}</span> : {{ $url_active_to_date }}
    <br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.active_from_date') }}</span> :{{ $active_from_date }} / /

    <span style="  font-weight: bold;">{{ __('PFBS.active_to_date') }}</span> : {{ $active_to_date }}
    <br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.url') }} </span>: {{ $url }} <br> <br>
    <span style="  font-weight: bold;"> {{ __('PFBS.route_name') }}</span> : {{ $route_name }} <br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.description') }}</span> : {{ $description }} <br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.note') }}</span> : {{ $note }} <br> <br>
    <span style="  font-weight: bold;">{{ __('PFBS.home_page_order') }}</span> : {{ $home_page_order }}<br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.teal') }}</span> : {{ $teal }} <br> <br>
    <span style="  font-weight: bold;">{{ __('PFBS.deactive_note') }}</span> {{ $deactive_note }} <br><br>
    <span style="  font-weight: bold;">{{ __('PFBS.services conditions') }}</span> :
    {{ $conditions }}<br><br>


    <span style="  font-weight: bold;">{{ __('PFBS.services collection images') }}</span> :

    <div class="form-group">


        @if ($logo1)
            <div style="height: 100px; width: 50vw; margin-top:10px; " class="d-flex  justify-content-start ">
                @foreach ($logo1 as $key => $data_img)
                    <x-actions del wire:click.prevent='deleteAttchment( {{ $key }} )'></x-actions>

                    <a href="{{ asset('storage/' . $data_img) }}" target="_blank">
                        <img src="{{ asset('storage/' . $data_img) }}"
                            style="height: 100%;width: 100%; padding-left:20px;">
                    </a>
                @endforeach

            </div>
        @endif


    </div>

    <span style="  font-weight: bold;">{{ __('PFBS.card_header') }}</span> :

    <div class="form-group">

        @if ($card_header)
            <div style="height: 100px; width: 50vw; margin-top:10px; " class="d-flex  justify-content-start ">
                <x-actions del wire:click.prevent='deleteCard_header'></x-actions>
                <a href="{{ asset('storage/' . $card_header) }}" target="_blank">
                    <img src="{{ asset('storage/' . $card_header) }}"
                        style="height: 100%;width: 100%; padding-left:20px;">
                </a>


            </div>
        @endif
    </div>


</div>
