<?php

namespace App\Livewire\Dashboard\CitzenServices;

use Livewire\Component;
use App\Traits\SortTrait;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\CitzenServices;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class ServicesIndex extends Component
{

    use SortTrait;
    use FlashMsgTraits;


    #[Url()]
    public $sortBy = 'created_at';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    #[Url()]
    public $perPage = 10;


    #[Url()]
    public $search = '';

    public $editServicesId;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $home_page_order;

    #[Validate('required|in:0,1')]
    public $active = '';

    #[Validate(['date_format:Y-m-d'])]
    public $active_from_date;

    #[Validate(['after_or_equal:now','date_format:Y-m-d'])]
    public $active_to_date;


 
    public function edit($id)
    {


        $this->editServicesId = $id;

        $data =  $this->services($id);

        $this->name = $data->name;

        $this->home_page_order = $data->home_page_order;
        $this->active = $data->active;
        $this->active_from_date = $data->active_from_date;
        $this->active_to_date = $data->active_to_date;
    }


    public function cancelEdit()
    {

        $this->reset('editServicesId');
    }

    public function update()
    {
        $this->validate();

        $data =  $this->services($this->editServicesId);

        $data->update([
            'name' => $this->name,
            'active' => $this->active,
            'home_page_order' => $this->home_page_order,
            'active_from_date' => $this->active_from_date,
            'active_to_date' => $this->active_to_date,
        ]);



        $this->cancelEdit();

        $this->resetPage();
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


    public function destroy($id)
    {
         
        $data = $this->services($id);
        if ($data->logo1) {
            foreach ($data->logo1 as $file) {
                Storage::disk('public')->delete($file);
            }
        }
         
          $data->delete();  
    }


    
    public function render()
    {
        
        $title = __('customTrans.services managment');
        return view('livewire.dashboard.citzen-services.services-index')->layoutData(['title' => $title, 'pageTitle' => $title]);
    }
}
