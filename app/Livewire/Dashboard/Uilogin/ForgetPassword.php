<?php

namespace App\Livewire\Dashboard\Uilogin;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\RecoveryAnswer;

class ForgetPassword extends Component
{
    public $recoveryQuestions = [];
    #[Validate(['required', 'exists:users,user_name'])]
    public $user_name;

    public $resetType;
    public $encryptEmailName;
    public $userQuestions;
    public $question1;
    public $question2;
    public $question3;
    public $answer1;
    public $answer2;
    public $answer3;
    public $checkResult = 0;
    #[Validate(['required', 'min:4', 'same:passwordConfirmation'])]
    public $password = '';
    public $passwordConfirmation = '';



    #[Computed]
    public function user()
    {
        return User::firstWhere('user_name', $this->user_name);
    }


    public function act()
    {
        if ($this->resetType == 'email') {

            $pos = strpos($this->user->email, '@');
            $emailName = substr($this->user->email, 0, $pos);
            $providerName = substr($this->user->email,  $pos);
            $count = ceil(strlen($emailName) * 60 / 100);
            $name = Str::limit($emailName, -$count, '***');

            $this->encryptEmailName = $name . $providerName;
        } else {

            $this->resetType = 'questions';
            if ($this->user) {
                $this->userQuestions = RecoveryAnswer::where('user_id', $this->user->id)->get();
 
                if( ! ($this->userQuestions->isEmpty()))   {
                    
                    $this->question1 = $this->userQuestions[0];
                    $this->question2 = $this->userQuestions[1];
                    $this->question3 = $this->userQuestions[2];
                }
                else {
                   
                      $this->addError('noQuestions',__('customTrans.noQuestions'));

                      return;
                }
             
            }
        }
    }

    public function checkAnswers()
    {

        if (
            $this->answer1 == $this->userQuestions[0]->answer
            && $this->answer2 == $this->userQuestions[1]->answer
            && $this->answer3 == $this->userQuestions[2]->answer
        ) {
            $this->checkResult = 1;
        } else {

            $this->addError('wrongAnswer',__('customTrans.wrongAnswer'));

            return;

            $this->checkResult = 0;
        }
    }


    public function changePassword()
    {
        $this->validate();
        if (
            $this->answer1 == $this->userQuestions[0]->answer
            && $this->answer2 == $this->userQuestions[1]->answer
            && $this->answer3 == $this->userQuestions[2]->answer
        ) {
                
            $this->user->update([
                'password' => Hash::make($this->password),
            ]);

            return redirect()->intended(route('uilogin.home'));

        } else {
            $this->addError('FailToResetPassword', "");

            return;
            $this->checkResult = 0;
        }
    }

    public function updated($prop)
    {

        $this->validateOnly($prop);
    }

    #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
        return view('livewire.dashboard.ui_auth.forget-password');
    }
}
