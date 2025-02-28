<?php

namespace App\Livewire\Dashboard\StatusModule;


use Livewire\Component;
use App\Models\SettingSystem;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Cache;
use App\Services\CacheSystemSettingServices;


class SystemClass extends Component
{
 
    public $description='';
    public $systems_data=[];

    #[Validate(['required','unique:setting_systems,system_name'])]
    public $system_name;




    public function systemStore()
    {

        $this->validate();

        SettingSystem::create([
            'system_name' => $this->system_name,
            'description' => $this->description,
        ]);


        FlashMsgTraits::created(); 
        $this->dispatch('new-system-addes');
        $this->reset();
    }

    // #[Computed()]
    // public  function systems_data() {
    //     // return SettingSystem::orderBy('created_at','desc')->get();
    //   return $this->getData() ;
    // }

    public  function mount() {
      $this->systems_data= CacheSystemSettingServices::getData() ;
    }

    public function render()
    {
    
        return view('livewire.dashboard.status.system');
    }



    
}


