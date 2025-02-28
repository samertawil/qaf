<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('stars.create')" :label="__('customTrans.add new')">
            <li class="breadcrumb-item"><a href="{{ route('stars.index') }}"
                    class="text-muted">{{ __('customTrans.stars list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('stars.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>

    <x-search-index-section search="search by star or writer name">

        <x-select wire:model.live='star_type_id' name='star_type_id' :options="$this->starTypes->pluck('status_name', 'id')" divWidth='2'
            ChoseTitle="select_star_type_id"></x-select>

    </x-search-index-section>

    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>

                        <x-table-th wire:click="setSortBy('star_name')" name="star_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.star_name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('description')" name="description" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.description')"></x-table-th>

                        <x-table-th wire:click="setSortBy('content_type')" name="content_type"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.content type')"></x-table-th>

                        <x-table-th wire:click="setSortBy('star_type_name')" name="star_type_id"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.star_type_id')"></x-table-th>



                        <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->stars as $star)
                        <tr>
                            <td> {{ $star->name_title == '' ? $star->star_name : $star->name_title . ' / ' . $star->star_name }}
                            </td>

                            <td> {{ $star->description }} </td>

                            <td>
                                @if ($star['content_type'])
                                    @foreach ($star['content_type'] as $value)
                                        <p class="d-flex"> {{ $value }} </p>
                                    @endforeach
                                @endif
                            </td>

                            <td> {{ $star->star_type_name }} </td>

                            <td class="d-flex  justify-content-center">

                                <x-actions preview data-target="#starPreview{{ $star->id }}"
                                    data-toggle="modal"></x-actions>


                                <x-modal width='lg' idName="starPreview{{ $star->id }}" footer
                                    :title="$star->star_name">

                                    <span style="font-weight: bold;"> {{ __('customTrans.about star') }}</span> : <br>
                                    <br> {{ $star->about_content_star }} <br> <br>

                                    <span style="font-weight: bold;"> {{ __('customTrans.profile image') }}</span> :
                                    <br>
                                    @if ($star->s_image)
                                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                                            class="d-flex  justify-content-start ">

                                            <a href="{{ asset('storage/' . $star->s_image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $star->s_image) }}"
                                                    style="height: 100%;width: 100%; padding-left:20px;">
                                            </a>


                                        </div>
                                    @endif


                                </x-modal>


                                <x-actions edit :route="route('stars.edit', $star->id)" wire:loading.attr='disabled'>
                                </x-actions>

                                <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                    wire:confirm.prompt="{{ __('customTrans.please insert name of star for del') }}\n|{{ $star->star_name }}"
                                    wire:click.prevent='destroy({{ $star->id }})'> <i
                                        class="ti-trash text-danger"></i>
                                </a>


                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $this->stars->links() }}
        </div>
    </div>

</div>
