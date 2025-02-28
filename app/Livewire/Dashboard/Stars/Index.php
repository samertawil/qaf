<?php

namespace App\Livewire\Dashboard\Stars;

use App\Models\Status;
use Livewire\Component;
use App\Traits\SortTrait;
use App\Models\ContentStar;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use SortTrait;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $sortBy = 'created_at';
    #[Url()]
    public $search='';
    public $perPage=5;
    #[Url()]
    public $star_type_id='';
   
    #[Computed()]
    public function stars()
    {
        return ContentStar::
          SearchName($this->search)
        ->SearchStarType($this->star_type_id)
        ->orderBy($this->sortBy, $this->sortdir)
        ->paginate($this->perPage);
       
    }

    public function destroy($id)
    {

        $data = ContentStar::findOrfail($id);

        $data->delete();

        Storage::disk('public')->delete('star_profile_image', $data->s_image);

        $this->dispatch('page-reload');
    }

    #[Computed()]
    public function starTypes()
    {
        return Status::where('p_id_sub', config('constant.starType'))->get();
    }
    public function render()
    {
        $title = __('customTrans.stars and writers');
        $pageTitle = __('customTrans.stars list');
        return view('livewire.dashboard.stars.index')->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
