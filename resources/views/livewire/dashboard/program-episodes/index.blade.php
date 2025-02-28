<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('program.episodes.create')" :label="__('customTrans.add new')">
            <li class="breadcrumb-item"><a href="{{ route('program.episodes.index') }}"
                    class="text-muted">{{ __('customTrans.episodes list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('program.episodes.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>

    <x-search-index-section search="program name">

        <x-input type="search" wire:model.live='SearchStarName' :placeholder="__('customTrans.content_start')"></x-input>

        <x-input type="search" wire:model.live='SearchEName' :placeholder="__('customTrans.e_name')"></x-input>

    </x-search-index-section>

    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <x-table-th wire:click="setSortBy('program_id')" name="program_id" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.program name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('e_name')" name="e_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.episode name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('content_start')" name="content_start"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.content_start')"></x-table-th>

                        <x-table-th wire:click="setSortBy('e_no')" name="e_no" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.e_no')"></x-table-th>

                        <x-table-th wire:click="setSortBy('e_title')" name="e_title" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.e_title')"></x-table-th>

                        <x-table-th wire:click="setSortBy('active')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('stream_date')" name="stream_date" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('favorite')" name="favorite" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('media_duration')" name="media_duration"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->episodes as $episode)
                        <tr>
                            <td> {{ $episode->program_name }} </td>

                            <td> {{ $episode->e_name }} </td>

                            <td>{{ $episode->content_start }} </td>

                            <td> {{ $episode->e_no }} </td>

                            <td> {{ $episode->e_title }} </td>

                            <td @class([
                                '',
                                'text-danger' => $episode->active == 0,
                                'text-success' => $episode->active == 1,
                            ])>

                                <div @class([
                                    'bg-danger dot-label' => $episode->active == 0,
                                    'bg-success dot-label' => $episode->active == 1,
                                ])></div>
                                {{ $episode->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>

                            <td> {{ myDateStyle1($episode->stream_date) }} </td>

                            <td> {{ $episode->favorite == 1 ? 'نعم' : 'لا' }} </td>

                            <td> {{ $episode->media_duration }} </td>
                            <td class="d-flex  justify-content-center">

                                <x-actions preview data-target="#episodePreview{{ $episode->id }}"
                                    data-toggle="modal"></x-actions>


                                <x-modal width='lg' idName="episodePreview{{ $episode->id }}" footer
                                    :title="$episode->e_name">

                                    <span style="font-weight: bold;"> {{ __('customTrans.url') }}</span> :
                                    <br><a href="{{ $episode->url }}" target="_blank"> {{ $episode->url }}</a> <br>
                                    <br>


                                    <span style="font-weight: bold;"> {{ __('customTrans.e_content') }}</span> :
                                    <br> {{ $episode->e_content }} <br> <br>

                                    <span style="font-weight: bold;"> {{ __('customTrans.notes') }}</span> :
                                    <br> {{ $episode->notes }} <br> <br>

                                    <span style="font-weight: bold;">
                                        {{ __('customTrans.program content type') }}</span> :
                                    <br>


                                    @if ($episode['content_type'])
                                        <div class="d-flex ">
                                            @foreach ($episode['content_type'] as $value)
                                                <li class="mx-2"> {{ $value }} </li>
                                            @endforeach
                                        </div>
                                    @endif
                                    <br>
                                    <br>


                                    <span style="font-weight: bold;"> {{ __('customTrans.similar_e') }}</span> :
                                    <br>

                                    @if ($episode['similar_e'])
                                        <div class="d-flex ">
                                            @foreach ($episode['similar_e'] as $value)
                                                <p class="mx-2"> {{ $value }} </p>
                                            @endforeach
                                        </div>
                                    @endif
                                    <br>
                                    <br>


                                    <span style="font-weight: bold;">{{ __('customTrans.cover image') }}</span> : <br>
                                    @if ($episode->cover_image)
                                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                                            class="d-flex  justify-content-episodet ">

                                            <a href="{{ asset('storage/' . $episode->cover_image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $episode->cover_image) }}"
                                                    style="height: 100%;width: 100%; padding-left:20px;">
                                            </a>


                                        </div>
                                    @endif

                                </x-modal>


                                <x-actions edit wire:loading.attr='disabled' :route="route('program.episodes.edit', $episode->id)">
                                </x-actions>

                                <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                    wire:confirm.prompt="{{ __('customTrans.please insert name of episode for del') }}\n|{{ $episode->name }}"
                                    wire:click.prevent='destroy({{ $episode->id }})'> <i
                                        class="ti-trash text-danger"></i>
                                </a>


                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $this->episodes->links() }}
        </div>
    </div>

</div>
