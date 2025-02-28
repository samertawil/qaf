<?php

namespace App\Livewire\Dashboard\Programs;

use App\Models\Status;
use App\Models\Program;
use Livewire\Component;
use App\Models\ContentStar;
use Illuminate\Support\Str;
use App\Traits\FlashMsgTraits;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Edit extends Component
{

    use  WithFileUploads;
    use  WithFilePond;
    
    public $program_name = '';
    public $description = '';
    public $notes = '';
    public $content_start ='';
    public $similar_programs = [];
    public $content_type = [];
    public  $active = true;
    public  $favorite = false;
    public $status_id = '';
    public $cover_image  ;
    public $full_name;
    public $star_id='';
    public $hot_feed='';
    public $hot_description='';
    public $programId='';
    public $data;
    public $tag=[];
    public $cover_image_preview='';

    public function mount($id)
    {
        $this->programId = $id;

        $this->data =  Program::findOrfail($this->programId);

        $this->program_name = $this->data['program_name'];
        $this->description = $this->data['description'];
        $this->notes = $this->data['notes'];
        $this->similar_programs = $this->data['similar_programs'];
        $this->content_type = $this->data['content_type'];
        $this->active = $this->data['active'];
        $this->favorite = $this->data['favorite'];
        $this->tag= $this->data['tag'];
        $this->status_id = $this->data['status_id'];
        $this->cover_image_preview = $this->data['cover_image'];
        $this->full_name = $this->data['full_name'];
        $this->star_id = $this->data['star_id'];
        $this->hot_feed = $this->data['hot_feed'];
        $this->hot_description = $this->data['hot_description'];
    }
 

    public  function rules(): array
    {
        $rules= [

            'cover_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            "program_name" => ['required', Rule::unique('programs','program_name')->ignore($this->programId)],
            'description' => ['required',],

        ];

        if ( empty($this->cover_image) &&  $this->data['cover_image'] )    {
           
               unset($rules['cover_image']); // Remove the email validation rule
        
        }
        return $rules;
    }


    public function store()
    {
      
        $this->validate();

        $image = '';
        $content_start='';

        
        if ($this->cover_image) {
            $image =  UploadingFilesTrait::uploadSingleFile($this->cover_image, 'program_cover_image', 'public');
        } else {
            $image = $this->data['cover_image'] ;
        }


   
        if($this->star_id) {
            $content_start=$this->contentStar()->find($this->star_id);
            $content_start=$content_start->star_name;
        }
       
       
        $slug = Str::slug($this->program_name);


        $this->data->update([

            'program_name' => $this->program_name,
            'description' => $this->description,
            'notes' => $this->notes,
            'star_id'=>$this->star_id,
            'content_start' => $content_start,
            'similar_programs' => $this->similar_programs,
            'content_type' => $this->content_type,
            'active' => $this->active,
            'favorite' => $this->favorite,
            'cover_image'=>$image,
            'user_id' => Auth::id(),
            'slug'=>$slug,
            'hot_feed'=>$this->hot_feed,
            'hot_description'=>$this->hot_description,
        ]);
        


        FlashMsgTraits::created();

        $this->reset();

        return redirect()->route('programs.index');
    }

    #[Computed()]
    public function contentStar()
    {
        return ContentStar::where('star_type_id',38)->get();
    }


    #[Computed()]
    public function similarPrograms()
    {
        return Program::get();
    }

    #[Computed()]
    public function contentTypes()
    {
        return Status::where('p_id_sub', config('constant.contentTypeId'))->get();
    }


    #[Computed()]
    public function statuses()
    {
        return Status::where('p_id_sub', config('constant.contentTypeId'))->get();
    }

    
    public function render()
    {
        $title=__('customTrans.program edit');
        return view('livewire.dashboard.programs.edit')->layoutData(['title'=>$title,'pageTitle'=>$title]);
    }
}
