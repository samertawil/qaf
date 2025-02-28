<?php

namespace App\Livewire\Dashboard\Stars;

use App\Models\Status;
use Livewire\Component;
use App\Models\ContentStar;
use Illuminate\Support\Str;
use App\Models\CommonRelated;
use Livewire\WithFileUploads;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;

use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;

class Create extends Component
{
 
    public $star_name = '';
    public $description = '';
    public $about_content_star = '';
    public $content_type = [];
    public $s_image;
    public $all_templates = [];
    public $attributeColumn = [];   // dropdown value
    public $attributeValue = [''];
    public $x1;
    public $url = [];
  

    public $name_title_id;
    public $star_type_id =38;
  
 
    // starType
 

    use  WithFileUploads;
    use  WithFilePond;


    public function mount()
    {

        $this->all_templates = Status::where('p_id_sub', config('constant.mostCommon'))->get();
    }

    public static function rules(): array
    {
        return [
            
            's_image' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
            'star_name'=>['required','min:5'],
            'star_type_id'=>['required'] , 
            
        ];
    }

 
    public function store()
    {
      
       $this->validate();
       
    if ($this->name_title_id=="") {
        $this->name_title_id=null;
    }

        $image = '';
        $titleName='';

        if ($this->s_image) {
            $image = UploadingFilesTrait::uploadSingleFile($this->s_image, 'star_profile_image', 'public');
        }


        if($this->name_title_id) {
            $titleName= $this->titleNames()->find($this->name_title_id);
            $titleName=$titleName->status_name;
        }
        
        
        $TypeName= $this->starTypes()->find($this->star_type_id);
      
        

        $slug = Str::slug($this->star_name);

  
            $starId = ContentStar::create([

                'star_name' => $this->star_name,
                'name_title_id'=>$this->name_title_id,
                'name_title' => $titleName,
                'description' => $this->description,
                'user_id' => Auth::id(),
                'content_type' => $this->content_type,
                'about_content_star' => $this->about_content_star,
                's_image' => $image,
                'slug' => $slug,
                'star_type_id'=>$this->star_type_id,
                'star_type_name'=>$TypeName->status_name,
            ]);

         

            FlashMsgTraits::created();

            $this->reset();

    
            
        }
  
 

    #[Computed()]
    public function contentTypes()
    {
        return Status::where('p_id_sub', config('constant.contentTypeId'))->get();
    }

    #[Computed()]
    public function titleNames()
    {
        return Status::where('p_id_sub', config('constant.titleNames'))->get();
    }

    #[Computed()]
    public function starTypes()
    {
        return Status::where('p_id_sub', config('constant.starType'))->get();
    }

 

    public function render()
    {
        $title=__('customTrans.stars and writers');
        $pageTitle= __('customTrans.add star');
        return view('livewire.dashboard.stars.create')->layoutData(['title' => $title, 'pageTitle' => $pageTitle]);
    }
}
