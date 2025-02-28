<?php

namespace App\Livewire\Dashboard\CitzenServices;

use Livewire\Component;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Livewire\Features\SupportFileUploads\WithFileUploads;



class ServicesEdit extends Component
{
    use WithFileUploads;

    public $num;
    public $name;
    public $url;
    public $status_id;
    public $Responsible;
    public $url_active_from_date;
    public $url_active_to_date;
    public $active_from_date;
    public $active_to_date;
    public $active = 1;
    public $description;
    public $note;
    public $conditions;
    public $route_name;

    public $logo1 = [];
    public $home_page_order;
    public $teal;
    public $deactive_note;
    public $properties;
    public $card_header;
    public $editServicesId;


    public function mount($id)
    {

        $this->editServicesId = $id;

        $data = $this->services($this->editServicesId);
        $this->num = $data->num;
        $this->name = $data->name;
        $this->home_page_order = $data->home_page_order;
        $this->active = $data->active;
        $this->active_from_date = $data->active_from_date;
        $this->active_to_date = $data->active_to_date;
        $this->conditions = $data->conditions;
        $this->description = $data->description;
        $this->note = $data->note;
        $this->url_active_from_date = $data->url_active_from_date;
        $this->url_active_to_date = $data->url_active_to_date;
        $this->url = $data->url;
        $this->route_name = $data->route_name;
        $this->Responsible = $data->Responsible;
        $this->teal = $data->teal;
        $this->deactive_note = $data->deactive_note;
        $this->properties = $data->properties;
    }


    public static function rules($id): array
    {
        return [

            "route_name" => ['required', Rule::unique('citzen_services')->ignore($id)],
            "name" => ['required', Rule::unique('citzen_services')->ignore($id)],
            "active" => ['required'],
            "home_page_order" => ['required'],
            "active_from_date" => ['date_format:Y-m-d'],
            "active_to_date" => ['date_format:Y-m-d'],
            "url_active_from_date" => ['date_format:Y-m-d'],
            "url_active_to_date" => ['date_format:Y-m-d'],
            "logo1.*" => 'nullable|image|max:2048',
            "card_header" => 'nullable|image|max:2048',

        ];
    }


    public function update()
    {

        $this->validate($this->rules($this->editServicesId));

        if ($this->logo1) {
            $logo1 =  UploadingFilesTrait::uploadsFiles($this->logo1, 'logo1', 'public');
        } else {
            $data = $this->services($this->editServicesId);
            $logo1 = $data->logo1;
        }

        if ($this->card_header) {
            $card_header =  UploadingFilesTrait::uploadSingleFile($this->card_header, 'card_header', 'public');
        } else {
            $data = $this->services($this->editServicesId);
            $card_header = $data->card_header;
        }
        $data = $this->services($this->editServicesId);

        $data->update([
            'name' => $this->name,
            'home_page_order' => $this->home_page_order,
            'active' => $this->active,
            'active_from_date' => $this->active_from_date,
            'active_to_date' => $this->active_to_date,
            'conditions' => $this->conditions,
            'description' => $this->description,
            'note' => $this->note,
            'url_active_from_date' => $this->url_active_from_date,
            'url_active_to_date' => $this->url_active_to_date,
            'url' => $this->url,
            'route_name' => $this->route_name,
            'Responsible' => $this->Responsible,
            'logo1' => $logo1,
            'card_header' => $card_header,
            'teal' => $this->teal,
            'deactive_note' => $this->deactive_note,
            'properties' => $this->properties,


        ]);

        FlashMsgTraits::created('success', 'update');

        redirect()->route('citzen.services.index');
    }

    #[Computed()]
    public static function services($id = null)
    {

        if ($id) {
            $data = CitzenServices::find($id);
            return $data;
        }
        $data = CitzenServices::get();
        return $data;
    }


    public function cancelEdit()
    {

        $this->reset('editServicesId');
    }



    public function render()
    {

        return view('livewire.dashboard.citzen-services.services-edit');
    }
}
