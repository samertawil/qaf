<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('advisories.create')" :label="__('customTrans.add new')">
            <li class="breadcrumb-item"><a href="{{ route('advisories.index') }}"
                    class="text-muted">{{ __('customTrans.advisories list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('advisories.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>
    </x-slot:crumb>

    <x-search-index-section search="advisory_name">


        <x-input type="search" wire:model.live='SearchStarName' :placeholder="__('customTrans.content_start')"></x-input>

        <x-select wire:model.live='AdvisoryTypeName' name='AdvisoryTypeName' :options="$this->contentCategories->pluck('status_name', 'status_name')" divWidth='2'
            ChoseTitle="content_category"></x-select>

    </x-search-index-section>

    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>


                        <x-table-th wire:click="setSortBy('advisory_name')" name="advisory_name"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.advisory_name')"></x-table-th>


                        <x-table-th wire:click="setSortBy('advisory_title')" name="advisory_title"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.advisory_title')"></x-table-th>

                        <x-table-th wire:click="setSortBy('content_start')" name="content_start"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.content_start')"></x-table-th>

                        <x-table-th wire:click="setSortBy('content_category')" name="content_category"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.content_category')"></x-table-th>

                        <x-table-th wire:click="setSortBy('active')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <x-table-th wire:click="setSortBy('favorite')" name="favorite" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <x-table-th wire:click="setSortBy('stream_date')" name="stream_date" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <x-table-th wire:click="setSortBy('media_duration')" name="media_duration"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->advisories as $advisory)
                        <tr>
                            <td> {{ $advisory->advisory_name }} </td>

                            <td> {{ $advisory->advisory_title }} </td>

                            <td> {{ $advisory->content_start }} </td>

                            <td> {{ $advisory->content_category }} </td>

                            <td @class([
                                '',
                                'text-danger' => $advisory->active == 0,
                                'text-success' => $advisory->active == 1,
                            ])>

                                <div @class([
                                    'bg-danger dot-label' => $advisory->active == 0,
                                    'bg-success dot-label' => $advisory->active == 1,
                                ])></div>
                                {{ $advisory->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>

                            <td> {{ $advisory->favorite == 1 ? 'نعم' : 'لا' }} </td>

                            <td> {{ myDateStyle1($advisory->stream_date) }} </td>

                            <td> {{ $advisory->media_duration }} </td>
                            <td class="d-flex  justify-content-center">

                                <x-actions preview data-target="#advisoryPreview{{ $advisory->id }}"
                                    data-toggle="modal"></x-actions>


                                <x-modal width='lg' idName="advisoryPreview{{ $advisory->id }}" footer
                                    :title="$advisory->advisory_name">

                                    <span style="font-weight: bold;"> {{ __('customTrans.url') }}</span> :
                                    <br><a href="{{ $advisory->url }}" target="_blank"> {{ $advisory->url }}</a>
                                    <br> <br>


                                    <span style="font-weight: bold;"> {{ __('customTrans.advisory_question') }}</span>
                                    :
                                    <br> {{ $advisory->advisory_question }} <br> <br>

                                    <span style="font-weight: bold;"> {{ __('customTrans.advisory_answer') }}</span> :
                                    <br> {{ $advisory->advisory_answer }} <br> <br>

                                    <span style="font-weight: bold;">
                                        {{ __('customTrans.similar_a') }}</span> :
                                    <br>


                                    @if ($advisory['similar_a'])
                                        <div class="d-flex ">
                                            @foreach ($advisory['similar_a'] as $value)
                                                <li class="mx-2"> {{ $value }} </li>
                                            @endforeach
                                        </div>
                                    @endif
                                    <br>
                                    <br>

                                    <span style="font-weight: bold;">
                                        {{ __('customTrans.related advisory') }}</span> :
                                    <br>
                                    {{-- @if ($advisory['similar_a']) --}}
                                    <div class="d-flex ">
                                        @foreach ($this->related->where('related_id', $advisory->id) as $value)
                                            <li class="mx-2"> {{ $value->advisory_name }}
                                            </li>
                                        @endforeach
                                    </div>
                                    {{-- @endif --}}
                                    <br>
                                    <br>


                                    <span style="font-weight: bold;">{{ __('customTrans.cover image') }}</span> :
                                    <br>
                                    @if ($advisory->cover_image)
                                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                                            class="d-flex  justify-content-advisoryt ">

                                            <a href="{{ asset('storage/' . $advisory->cover_image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $advisory->cover_image) }}"
                                                    style="height: 100%;width: 100%; padding-left:20px;">
                                            </a>


                                        </div>
                                    @endif



                                </x-modal>


                                <x-actions edit wire:loading.attr='disabled' :route="route('advisories.edit', $advisory->id)">
                                </x-actions>

                                <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                    wire:confirm.prompt="{{ __('customTrans.please insert name of advisory for del') }}\n|{{ $advisory->advisory_name }}"
                                    wire:click.prevent='destroy({{ $advisory->id }})'> <i
                                        class="ti-trash text-danger"></i>
                                </a>


                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $this->advisories->links() }}
        </div>
    </div>

</div>
