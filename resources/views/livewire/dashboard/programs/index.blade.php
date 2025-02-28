<div>
    <x-slot:crumb>
        <x-breadcrumb button :route="route('programs.create')" :label="__('customTrans.add new')">
            <li class="breadcrumb-item"><a href="{{ route('programs.index') }}"
                    class="text-muted">{{ __('customTrans.programs list') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('programs.create') }}"
                    class="text-muted">{{ __('customTrans.add new') }} </a></li>
        </x-breadcrumb>

    </x-slot:crumb>

    <x-search-index-section search="program name">

            <x-input type="search" wire:model.live='SearchStarName' :placeholder="__('customTrans.content_start')"  ></x-input>
            
    </x-search-index-section>


    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>

                        <x-table-th wire:click="setSortBy('program_name')" name="program_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.program name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('description')" name="description" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.description')"></x-table-th>

                        <x-table-th wire:click="setSortBy('content_start')" name="content_start" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.content_start')"></x-table-th>

                            <x-table-th wire:click="setSortBy('active')" name="activation"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                            <x-table-th wire:click="setSortBy('content_type')" name="program content type" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('customTrans.program content type')"></x-table-th>


                         <th class="text-center"> <span>{{ __('customTrans.actions') }}</span></th>  

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->programs as $program)
                        <tr>
                            <td> {{ $program->program_name }} </td>

                            <td> {{ $program->description }} </td>

                          
                                <td> {{ $program->content_start }} </td>
                              
                               
                         
                            <td @class([
                                '',
                                'text-danger' => $program->active == 0,
                                'text-success' => $program->active == 1,
                            ])>

                                <div @class([
                                    'bg-danger dot-label' => $program->active == 0,
                                    'bg-success dot-label' => $program->active == 1,
                                ])></div>
                                {{ $program->active == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>

                            <td>
                                @if ($program['content_type'])
                                @foreach ($program['content_type'] as $value)
                                <p class="d-flex"> {{ $value }} </p>
                            @endforeach 
                                @endif
                               
                            </td>
                          <td class="d-flex  justify-content-center">

                                <x-actions preview data-target="#programPreview{{ $program->id }}"
                                    data-toggle="modal"></x-actions>


                                <x-modal width='lg' idName="programPreview{{ $program->id }}" footer
                                    :title="$program->full_name">

                                    <span style="font-weight: bold;"> {{ __('customTrans.notes') }}</span> : <br>
                                    <br> {{ $program->notes}} <br> <br>

                                    <span style="font-weight: bold;"> {{ __('customTrans.similar_programs') }}</span> : <br>
                                    <br>
                                    @if ( $program['similar_programs'])
                                    @foreach ( $program['similar_programs'] as $value  )
                                    <p class="d-flex"> {{ $value }} </p>
                                    @endforeach 
                                    @endif
                                     <br> <br>


                                   <span style="font-weight: bold;">{{ __('customTrans.cover image') }}</span>  : <br>
                                    @if ($program->cover_image)
                                        <div style="height: 100px; width: 50vw; margin-top:10px; "
                                            class="d-flex  justify-content-programt ">

                                            <a href="{{ asset('storage/' . $program->cover_image) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $program->cover_image) }}"
                                                    style="height: 100%;width: 100%; padding-left:20px;">
                                            </a>


                                        </div>
                                    @endif


                                </x-modal>


                                <x-actions edit wire:navigate wire:loading.attr='disabled' :route="route('programs.edit', $program->id)">
                                </x-actions>

                                <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                     wire:confirm.prompt="{{ __('customTrans.please insert name of program for del') }}\n|{{ $program->program_name }}"  

                                    wire:click.prevent='destroy({{$program->id}})'> <i
                                        class="ti-trash text-danger"></i>
                                </a>
                              

                            </td>  

                        </tr>
                    @endforeach
                </tbody>

            </table>
         {{ $this->programs->links() }}  
        </div>
    </div>

</div>
