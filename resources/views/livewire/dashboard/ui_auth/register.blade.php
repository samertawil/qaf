 <div class="d-flex mt-4" style="height: 600px;">
     <div class="container m-auto">
         <div class="row justify-content-center">
             <div class="col-md-5">
                 <div class="card">
                     <div class="card-header">{{ __('customTrans.register_new_account') }}</div>

                     <div class="card-body">

                         <form wire:submit='register'>

                             <x-input wire:model.live='user_name' name="user_name" label="yes" dir="ltr" 
                                 divlclass='col-lg-12' req></x-uilogin-input>

                             <x-input wire:model.live='name' name="name" label="yes"
                                 divlclass='col-lg-12' req></x-uilogin-input>


                             <x-input wire:model.live='mobile' name="mobile" label="yes"
                                 divlclass='col-lg-12' dir="ltr" req></x-uilogin-input>


                             <x-input wire:model.live='email' name="email" label="yes"
                                 divlclass='col-lg-12' dir="ltr" req></x-uilogin-input>

                             @php
                                 $questions  = 'question_' . app()->getLocale();
                             @endphp
                             <div >
                                 @foreach ($repeater as $index => $question)
                                     <tr>
                                         <td>
                                   
                                             <x-select wire:model="recoveryQuestions.0"   name="recoveryQuestions.0"
                                             :options="$this->QuestionData->pluck(  $questions , 'id')"
                                                 label divlclass='col-lg-12' wire:change='QuestionData2'
                                                   :description_field="__('customTrans.recoveryQuestions')" req></x-uilogin-select>

                                         </td>
                                         <x-input wire:model='answers.0' name="answers.0"
                                             label="yes" divlclass='col-lg-12'  req></x-uilogin-input>

                                             
                                             <x-select wire:model="recoveryQuestions.1" 
                                             :options="$this->QuestionData2->pluck(  $questions , 'id')" name="recoveryQuestions.1"
                                                 label divlclass='col-lg-12'  wire:change='QuestionData3' req></x-uilogin-select>

                                         </td>
                                         <x-input wire:model='answers.1' name="answers.1"
                                             label="yes" divlclass='col-lg-12'  req></x-uilogin-input>

                                                 
                                             <x-select wire:model="recoveryQuestions.2" 
                                             :options="$this->QuestionData3->pluck(  $questions , 'id')" name="recoveryQuestions.2"
                                                 label divlclass='col-lg-12'  req></x-uilogin-select>

                                         </td>
                                         <x-input wire:model='answers.2' name="answers.2"
                                             label="yes" divlclass='col-lg-12'  req></x-uilogin-input>

                                     </tr>
                                 @endforeach


                             </div>
                             

                             <x-input wire:model='password' type="password" name="password" label="yes"
                                 autocomplete="new-password" divlclass='col-lg-12' req></x-uilogin-input>

                             <x-input wire:model.live='passwordConfirmation' name="passwordConfirmation"
                                 id="password_confirmation" type="password" label="yes" autocomplete="new-password"
                                 divlclass='col-lg-12' req></x-uilogin-input>


                             <x-button :name="__('customTrans.register_new_account')" class="bg-primary text-white"
                                 divlclass="d-grid gap-2"></x-uilogin-button>


                             <x-cancel-back :route="route('login')" wire:navigate
                                 label="cancel_back"></x-uilogin-cancel-back>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
