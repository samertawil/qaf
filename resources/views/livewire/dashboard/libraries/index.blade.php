<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('library.create')" :label="__('customTrans.add book')">
            <li class="breadcrumb-item"><a href="{{ route('library.index') }}"
                    class="text-muted">{{ __('customTrans.books list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('library.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>
    </x-slot:crumb>

    <x-search-index-section search="book_name">


        <x-input type="search" wire:model.live='SearchWriterName' :placeholder="__('customTrans.writer')"></x-input>

        <x-select wire:model.live='SearchContentCategories' name='SearchContentCategories' :options="$this->contentCategories->pluck('status_name', 'status_name')"
            divWidth='2' ChoseTitle="book_category_id"></x-select>

    </x-search-index-section>


    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>


                        <x-table-th wire:click="setSortBy('book_name')" name="book_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.book_name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('book_title')" name="book_title" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.book_title')"></x-table-th>

                        <x-table-th wire:click="setSortBy('writer_id')" name="writer_id" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.writer')"></x-table-th>

                        <x-table-th wire:click="setSortBy('book_category_id')" name="book_category_id"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('customTrans.book_category_id')"></x-table-th>

                        <x-table-th wire:click="setSortBy('active')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <x-table-th wire:click="setSortBy('favorite')" name="favorite" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>



                        <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->libraries as $library)
                        <tr>
                            <td> {{ $library->book_name }} </td>

                            <td> {{ $library->book_title }} </td>

                            <td> {{ $library->writer_name }} </td>

                            <td> {{ $library->book_category }} </td>

                            <td @class([
                                '',
                                'text-danger' => $library->active == 0,
                                'text-success' => $library->active == 1,
                            ])>

                                <div @class([
                                    'bg-danger dot-label' => $library->active == 0,
                                    'bg-success dot-label' => $library->active == 1,
                                ])></div>
                                {{ $library->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>

                            <td> {{ $library->favorite == 1 ? 'نعم' : 'لا' }} </td>




                            <td class="d-flex  justify-content-center">

                                <x-actions preview data-target="#bookPreview{{ $library->id }}"
                                    data-toggle="modal"></x-actions>


                                <x-modal width='lg' idName="bookPreview{{ $library->id }}" footer
                                    :title="$library->book_name">

                                    <span style="font-weight: bold;"> {{ __('customTrans.paper_count') }}</span> :
                                    <br> {{ $library->paper_count }} <br> <br>


                                    <span style="font-weight: bold;"> {{ __('customTrans.publish_date') }}</span> :
                                    <br> {{ myDateStyle1($library->publish_date) }} <br> <br>

                                    <span style="font-weight: bold;"> {{ __('customTrans.slug') }}</span> :
                                    <br> {{ $library->slug }} <br> <br>

                                    <span style="font-weight: bold;">
                                        {{ __('customTrans.similar_b') }}</span> :
                                    <br>


                                    @if ($library['similar_b'])
                                        <div class="d-flex ">
                                            @foreach ($library['similar_b'] as $value)
                                                <li class="mx-2"> {{ $value }} </li>
                                            @endforeach
                                        </div>
                                    @endif
                                    <br>
                                    <br>


                                    <span style="font-weight: bold;">{{ __('customTrans.cover image') }}</span> :
                                    <br>
                                    @if ($library->cover_image)
                                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                                            class="d-flex  justify-content-libraryt ">

                                            <a href="{{ asset('storage/' . $library->cover_image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $library->cover_image) }}"
                                                    style="height: 100%;width: 100%; padding-left:20px;">
                                            </a>


                                        </div>
                                    @endif



                                </x-modal>


                                <x-actions edit wire:loading.attr='disabled' :route="route('library.edit', $library->id)">
                                </x-actions>

                                <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                    wire:confirm.prompt="{{ __('customTrans.please insert name of library for del') }}\n|{{ $library->name }}"
                                    wire:click.prevent='destroy({{ $library->id }})'> <i
                                        class="ti-trash text-danger"></i>
                                </a>


                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $this->libraries->links() }}
        </div>
    </div>

</div>
