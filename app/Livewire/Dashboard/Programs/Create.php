<?php

namespace App\Livewire\Dashboard\Programs;

use App\Models\Status;
use App\Models\Program;
use Livewire\Component;
use App\Models\ContentStar;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;

class Create extends Component
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




 
    public static function rules(): array
    {
        return [
            'cover_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'program_name' => ['required','unique:programs,program_name'],
            'description' => ['required',],
           
        ];
    }

 
    public function store()
    {
      
        $this->validate();

        $image = '';
        $content_start='';

        if ($this->cover_image) {
            $image = UploadingFilesTrait::uploadSingleFile($this->cover_image, 'program_cover_image', 'public');
        }
      
        if($this->star_id) {
            $content_start=$this->contentStar()->find($this->star_id);
            $content_start=$content_start->star_name;
        }
       
       
        $slug = Str::slug($this->program_name);


        Program::create([

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
        $title = __('customTrans.programs');
        $pageTitle = __('customTrans.add program');

        return view('livewire.dashboard.programs.create')->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
