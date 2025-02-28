<div>




    <x-slot:crumb>
        <x-breadcrumb   button   data-target="#UserCreateModel1" data-toggle="modal" :label="__('customTrans.create new account')">
           
                <li class="breadcrumb-item"><a href="{{route('user.index')}}" class="text-muted">{{__('customTrans.users')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('ability.index')}}" class="text-muted">{{__('customTrans.abilities')}} </a></li>
                <li class="breadcrumb-item"><a href="{{route('role.index')}}" class="text-muted">{{__('customTrans.role group')}} </a></li>
           
        </x-breadcrumb>

    </x-slot:crumb>




    @push('css')
        <script src="https://cdn.tailwindcss.com"></script>
    @endpush


    <x-modal idName="UserCreateModel1" :title="__('customTrans.create new account')">

       
        @livewire('Dashboard.UserModule.register-form')

    </x-modal>


    {{--   
                <div> <label for="hs-search-box-with-loading-1" class="ti-form-label">Search</label> <div class="relative"> <input type="text" id="hs-search-box-with-loading-1" name="hs-search-box-with-loading-1" class="ti-form-input rounded-sm ltr:pl-11 rtl:pr-11 focus:z-10" placeholder="Input search"> <div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4"> <div class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-primary rounded-full" role="status" aria-label="loading"> <span class="sr-only">Loading...</span> </div> </div> </div> </div> --}}



<x-search-index-section>
    
        <div class="col-sm-12 col-md-2">
            <x-select :options="config('myConstants')['userType']" divWidth="12" :ChoseTitle="__('customTrans.user_type')" wire:model.live="searchUsertype"
                ChoseTitle="all"></x-select>
        </div>

</x-search-index-section>


    <div class="table-responsive">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>
                        <th><span>#</span></th>

                        <x-table-th wire:click="setSortBy('user_name')" name="user_name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('name')" name="name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('user_type')" name="user_type" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>


                        <x-table-th wire:click="setSortBy('user_activation')" name="user_activation"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>


                        <th><span>{{ __('customTrans.mobile') }}</span></th>


                        <th class="text-center">{{ __('customTrans.actions') }}</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($users as $key => $user)
                        <td>{{ $key + 1 }} </td>

                        <td>{{ $user->user_name }}</td>

                        @if ($editUserId === $user->id)
                            <td>
                                <input wire:model='editName' placeholder="..." class="form-control bg-white">
                            </td>
                        @else
                            <td>{{ $user->name }}</td>
                        @endif

                        @if ($editUserId === $user->id)
                            <td>
                                <select wire:model="edituserType" class="form-control bg-white">
                                    <option value="user">user</option>
                                    <option value="employee">employee</option>
                                    <option value="admin">admin</option>
                                    <option value="superadmin">superadmin</option>
                                </select>
                            </td>
                        @else
                            <td> {{ $user->user_type }} </td>
                        @endif


                        @if ($editUserId === $user->id)
                            <td>
                                <select wire:model="editActiovation" class="form-control bg-white">

                                    <option value="1">{{ __('customTrans.active') }}</option>
                                    <option value="0">{{ __('customTrans.not active') }}</option>
                                </select>
                            </td>
                        @else
                            <td @class([
                                '',
                                'text-danger' => $user->user_activation == 0,
                                'text-success' => $user->user_activation == 1,
                            ])>

                                <div @class([
                                    'bg-danger dot-label' => $user->user_activation == 0,
                                    'bg-success dot-label' => $user->user_activation == 1,
                                ])></div>
                                {{ $user->user_activation == 1 ? __('customTrans.active') : __('customTrans.not active') }}
                            </td>
                        @endif




                        @if ($editUserId === $user->id)
                            <td>
                                <input wire:model='editMobile' placeholder="..." class="form-control bg-white">
                            </td>
                        @else
                            <td>
                                {{ $user->mobile }}</td>
                            </td>
                        @endif

                        <td class="d-flex  justify-content-center">
                            @if (!($editUserId === $user->id))
                                <x-actions preview data-target="#Userpreview{{ $user->id }}"
                                    data-toggle="modal"></x-actions>


                                <x-modal idName="Userpreview{{ $user->id }}">

                                    {{ __('customTrans.created_at') }} : {{ myDateStyle1($user->created_at) }}</br>
                                    {{ __('customTrans.email') }} : {{ $user->email }}</br>
                                    {{ __('customTrans.need_to_change') }} :
                                    {{ $user->need_to_change == 1 ? __('customTrans.yes') : __('customTrans.no') }}

                                </x-modal>


                                <x-actions edit wire:loading.attr='disabled'
                                    wire:click.prevent='edit({{ $user->id }})'></x-actions>

                                <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                    wire:confirm.prompt="{{ __('customTrans.please insert user name for del') }}\n|{{ $user->user_name }}"
                                    wire:click.prevent='destroy({{ $user->id }})'> <i
                                        class="ti-trash text-danger"></i> </a>


                                        {{-- <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                        wire:confirm.prompt='هل انت متأكد؟  \n للتاكيد الرجاء كتابة اسم المستخدم|{{ $user->user_name }}'
                                        wire:click.prevent='destroy({{ $user->id }})'> <i
                                            class="ti-trash text-danger"></i> </a> --}}


                            @else
                                <x-actions make wire:loading.attr='disabled' wire:click.prevent='update'></x-actions>
                                <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                            @endif


                            <div class="dropdown">

                                <a href="#" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown"
                                    id="dropdownMenuButton" class="btn btn-lg text-dark">
                                    <i class="ti-settings text-dark"></i>

                                </a>

                                <div class="dropdown-menu tx-13 ">
                                    <a class="dropdown-item " href="#"
                                        wire:click.prevent='resetPass({{ $user->id }})'>{{__('customTrans.request_need_password')}}</a>

                                    <a class="dropdown-item " href="{{route('user-roles.create', $user->id )}}">{{__('customTrans.grant_privileges')}}</a>
                                </div>
                            </div>


                        </td>

                        </tr>
                    @endforeach
                    {{-- </tr> --}}
                </tbody>
            </table>
            {{ $users->links() }}
        </div>

    </div>




    @push('js')
    @endpush

</div>
