<?php

namespace App\Livewire\Website\Pages\Advisories;

use App\Models\Program;
use Livewire\Component;
use App\Models\Advisory;
use App\Models\ProgramEpisode;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Computed;
use App\Models\AdvisoriesrRelatedVw;


class AdvisoryShow extends Component
{

  public $advisory_name = '';
  public $advisory_title = '';
  public $advisory_question = '';
  public $advisory_answer = '';
  public $content_category = '';
  public $url = '';
  public $stream_date = '';
  public $media_duration = '';
  public $cover_image = '';
  public $similar_a = [];
  public $star_id = '';
  public $tags = [];
  public $slug = '';
  public $id;


  public $data;
  public $advisoryId = '';

  public function mount($id = '')
  {
    $this->advisoryId = $id;

    $this->data = $this->advisories()->findOrfail($this->advisoryId);

    $this->id=$this->data['id'];
    $this->advisory_name = $this->data['advisory_name'];
    $this->advisory_title = $this->data['advisory_title'];
    $this->advisory_question = $this->data['advisory_question'];
    $this->advisory_answer = $this->data['advisory_answer'];
    $this->content_category = $this->data['content_category'];
    $this->url = $this->data['url'];
    $this->stream_date = $this->data['stream_date'];
    $this->media_duration = $this->data['media_duration'];
    $this->cover_image = $this->data['cover_image'];
    $this->similar_a = $this->data['similar_a'];
    $this->star_id = $this->data['star_id'];
    $this->tags = $this->data['tags'];
    $this->slug = $this->data['slug'];

 
  }

  #[Computed()]
  public function advisories()
  {
    return Advisory::with('star')->get();
  }

  #[Computed()]
  public function related()
  {
    
      return AdvisoriesrRelatedVw::where('related_id',$this->advisoryId)->get() ;
       
  }


  #[Computed()]
  public function related2()
  {
    
      return AdvisoriesrRelatedVw::with('related2')->where('id',$this->advisoryId)->get();

    }


  #[Layout('components.layouts.website-master')]
  public function render()
  {

    $Title = __('customTrans.episodes list');
    return view('livewire.website.pages.Advisories.advisory-show')->layoutData(['Title' => $Title]);
  }
}
