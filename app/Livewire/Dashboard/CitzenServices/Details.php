<?php

namespace App\Livewire\Dashboard\CitzenServices;

use Livewire\Component;
use App\Models\CitzenServices;
use Illuminate\Support\Facades\Storage;

class Details extends Component
{
    public $editServicesId;

    public $active;

    public $conditions;

    public $description;

    public $note;

    public $url_active_from_date;

    public $active_from_date;

    public $url_active_to_date;

    public $active_to_date;

    public $url;

    public $Responsible;

    public $route_name;

    public $logo1;

    public $logo1_1;

    public $card_header;

    public $card_header_1;

    public $goEdit = 0;

    public $dataToEdit;

    public $teal;

    public $home_page_order;

    public $deactive_note;

    public $properties = [];

    // use WithFileUploads;



    public function mount($id)
    {


        $this->editServicesId = $id;

        $data = CitzenServices::find($this->editServicesId);

        $this->dataToEdit = $data;
        $this->active = $data->active;
        $this->conditions = $data->conditions;
        $this->description = $data->description;
        $this->note = $data->note;
        $this->url_active_from_date = $data->url_active_from_date;
        $this->url_active_to_date = $data->url_active_to_date;
        $this->active_from_date = $data->active_from_date;
        $this->active_to_date = $data->active_to_date;
        $this->url = $data->url;
        $this->route_name = $data->route_name;
        $this->Responsible = $data->Responsible;
        $this->logo1 = $data->logo1;
        $this->card_header = $data->card_header;
        $this->teal = $data->teal;
        $this->home_page_order = $data->home_page_order;
        $this->deactive_note = $data->deactive_note;
        $this->properties = $data->properties;
    }


    public function deleteAttchment($key)
    {

        $data = CitzenServices::Where('id', $this->editServicesId)->first();
        $array =  $data->logo1;
        $deleteFromDisk = $array[$key];

        unset($array[$key]);


        $data->update([
            'logo1' => $array,
        ]);

        Storage::disk('public')->delete($deleteFromDisk);

        $this->dispatch('closeModel');
    }



    public function deleteCard_header()
    {

        $data = CitzenServices::Where('id', $this->editServicesId)->first();
        $data->card_header;
        $deleteFromDisk =  $data->card_header;

        $data->update([
            'card_header' => null,
        ]);

        Storage::disk('public')->delete('card_header', $deleteFromDisk);

        $this->dispatch('page-reload');
    }

    public function render()
    {
        $title = __('PFBS.services managment');
        return view('livewire.dashboard.citzen-services.details')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
