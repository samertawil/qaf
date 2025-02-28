<div class="d-flex mt-4" style="height: 600px;">
    <div class="container m-auto">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('customTrans.Forgot Your Password') }}</div>

                    <div class="card-body">

                        <form wire:submit=''>

                            <x-input wire:model.live='user_name' name="user_name" label="yes" dir="ltr"
                                divlclass='col-lg-12' req></x-uilogin-input>



                            <div>
                                @if ($this->user)
                                    <div class="w-100 text-center fw-bold">
                                        <span>{{ __('customTrans.mr/s') }} :
                                        </span><span>{{ ' ' . $this->user->name }}</span>
                                    </div>


                                    <x-radio label wire:model='resetType' name="resetType" value1="questions"
                                        value2="email" value_title1="questions" value_title2="email" divWidth='12'
                                        wire:change='act'></x-uilogin-radio>

                                    @if ($this->resetType == 'email')
                                        <span>{{ __('customTrans.send to email') }} : </span>
                                        <div class="mb-3"> <span class=" fw-bold ">
                                                {{ ' ' . $this->encryptEmailName }}</span> </div>


                                        <x-button :name="__('customTrans.send')" class="bg-primary text-white"
                                            divlclass="d-grid gap-2"></x-uilogin-button>
                                    @elseif ($this->resetType == 'questions')
                                        @if (!$errors->has('noQuestions'))
                                            @php
                                                $question = 'question_' . app()->getLocale();

                                            @endphp

                                            <p>{{ $this->question1->questions->$question ?? '' }}</p>

                                            <x-input wire:model='answer1' name="answer1" label="yes"
                                                divlclass='col-lg-12' req></x-uilogin-input>

                                            <p>{{ $this->question2->questions->$question ?? '' }}</p>

                                            <x-input wire:model='answer2' name="answer2" label="yes"
                                                divlclass='col-lg-12' req></x-uilogin-input>

                                            <p>{{ $this->question3->questions->$question ?? '' }}</p>

                                            <x-input wire:model='answer3' name="answer3" label="yes"
                                                divlclass='col-lg-12' req></x-uilogin-input>


                                            <x-button :name="__('customTrans.checkAnswers')" wire:click.prevent='checkAnswers'
                                                class="bg-primary text-white"
                                                divlclass="d-grid gap-2"></x-uilogin-button>
                                        @else
                                            <div class="w-100 bg-danger text-white text-center">
                                                <p>{{ __('customTrans.noQuestions') }}</p>
                                            </div>
                                        @endif

                                        @if ($errors->has('wrongAnswer'))
                                            <div class="w-100 bg-danger text-white text-center">
                                                <p>{{ __('customTrans.wrongAnswer') }}</p>
                                            </div>
                                        @endif

                                        @if ($errors->has('FailToResetPassword'))
                                            <div class="w-100 bg-danger text-white text-center">
                                                <p>{{ __('customTrans.FailToResetPassword') }}</p>
                                            </div>
                                        @endif

                                        @if ($this->checkResult == 1)
                                            <x-input wire:model.live='password' type="password" name="password"
                                                label="yes" autocomplete="new-password" divlclass='col-lg-12'
                                                req></x-uilogin-input>

                                            <x-input wire:model.live='passwordConfirmation'
                                                name="passwordConfirmation" id="password_confirmation" type="password"
                                                label="yes" autocomplete="new-password" divlclass='col-lg-12'
                                                req></x-uilogin-input>


                                            <x-button :name="__('customTrans.Change_Password')" class="bg-primary text-white"
                                                divlclass="d-grid gap-2"
                                                wire:click.prevent='changePassword'></x-uilogin-button>
                                        @endif
                                    @endif

                                @endif

                            </div>






                            <x-cancel-back :route="route('login')" wire:navigate
                                label="cancel_back"></x-uilogin-cancel-back>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
