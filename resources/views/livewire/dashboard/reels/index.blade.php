<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('reels.create')" :label="__('customTrans.add new')">
            <li class="breadcrumb-item"><a href="{{ route('reels.index') }}"
                    class="text-muted">{{ __('customTrans.reels list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('reels.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>

    <x-search-index-section search="reel_name">

        <x-select :options="$this->socialMediaName->pluck('status_name', 'id')" wire:model.live='SearchBySocial' :placeholder="__('customTrans.social_media_id')"></x-select>

    </x-search-index-section>


    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>

                        <x-table-th wire:click="setSortBy('reel_name')" name="reel_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.reel_name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('reel_title')" name="reel_title" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.reel_title')"></x-table-th>

                        <x-table-th wire:click="setSortBy('social_media_name')" name="social_media_name"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.social_media_id')"></x-table-th>

                        <x-table-th wire:click="setSortBy('reel_category')" name="reel_category"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.reel_category_id')"></x-table-th>

                            <x-table-th wire:click="setSortBy('media_type_id')" name="media_type_id"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.media_type_id')"></x-table-th>


                        <x-table-th wire:click="setSortBy('active')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('favorite')" name="favorite" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->reels as $reel)
                        <tr>
                            <td> {{ $reel->reel_name }} </td>

                            <td> {{ $reel->reel_title }} </td>

                            <td> {{ $reel->social_media_name }} </td>

                            <td> {{ $reel->reel_category }} </td>

                           <td>
                            {{ $reel->media_type_id == 1 ? __('customTrans.video') : __('customTrans.image') }}
                            </td> 
                            <td @class([
                                '',
                                'text-danger' => $reel->active == 0,
                                'text-success' => $reel->active == 1,
                            ])>

                                <div @class([
                                    'bg-danger dot-label' => $reel->active == 0,
                                    'bg-success dot-label' => $reel->active == 1,
                                ])></div>
                                {{ $reel->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>

                            <td> {{ $reel->favorite == 1 ? 'نعم' : 'لا' }} </td>

                            <td class="d-flex  justify-content-center">

                                <x-actions preview data-target="#reelPreview{{ $reel->id }}"
                                    data-toggle="modal"></x-actions>


                                <x-modal width='lg' idName="reelPreview{{ $reel->id }}" footer
                                    :title="$reel->full_name">

                                    <span style="font-weight: bold;"> {{ __('customTrans.hot_feed') }}</span> : <br>
                                    <br> {{ $reel->hot_feed }} <br> <br>

                                    <span style="font-weight: bold;"> {{ __('customTrans.hot_description') }}</span> :
                                    <br>
                                    <br> {{ $reel->hot_description }} <br> <br>

                                    <span style="font-weight: bold;"> {{ __('customTrans.tags') }}</span> :
                                    <br>
                                    <br>
                                    @if ($reel['tags'])
                                        @foreach ($reel['tags'] as $value)
                                            <p class="d-flex"> {{ $value }} </p>
                                        @endforeach
                                    @endif
                                    <br> <br>


                                    <span style="font-weight: bold;">{{ __('customTrans.cover image') }}</span> : <br>
                                    @if ($reel->cover_image)
                                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                                            class="d-flex  justify-content-reelt ">

                                            <a href="{{ asset('storage/' . $reel->cover_image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $reel->cover_image) }}"
                                                    style="height: 100%;width: 100%; padding-left:20px;">
                                            </a>


                                        </div>
                                    @endif


                                </x-modal>


                                <x-actions edit wire:loading.attr='disabled' :route="route('reels.edit', $reel->id)">
                                </x-actions>

                                <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                    wire:confirm.prompt="{{ __('customTrans.please insert name of reel for del') }}\n|{{ $reel->reel_name }}"
                                    wire:click.prevent='destroy({{ $reel->id }})'> <i
                                        class="ti-trash text-danger"></i>
                                </a>


                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $this->reels->links() }}
        </div>
    </div>

</div>
