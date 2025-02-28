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

use Illuminate\Support\Facades\DB;
use App\Traits\UploadingFilesTrait;
use Illuminate\Support\Facades\Auth;
use Spatie\LivewireFilepond\WithFilePond;

class Create extends Component
{
    public $name_title = '';
    public $f_name = '';
    public $l_name = '';
    public $full_name = '';
    public $nick_name = '';
    public $about_content_star = '';
    public $content_type = [];
    public $s_image;
    public $all_templates = [];
    public $attributeColumn = [];   // dropdown value
    public $attributeValue = [''];
    public $x1;
    public $url=[];

    use  WithFileUploads;
    use  WithFilePond;


    public function mount()
    {

        $this->all_templates = Status::where('p_id_sub', config('constant.mostCommon'))->get();
    }

    public static function rules(): array
    {
        return [
            'file' => 'required|mimetypes:image/jpg,image/jpeg,image/png|max:1024',
        ];
    }

    public function updatedFile()
    {
        $this->validate($this->rules());
    }

    public function store()
    {
      
        $image = '';

         if ($this->s_image) {
             $image = UploadingFilesTrait::uploadSingleFile($this->s_image, 'star_profile_image', 'public');
          }
          
         $slug = Str::slug($this->full_name);

         DB::beginTransaction();

         try {
           $starId= ContentStar::create([
                'f_name' => $this->f_name,
                'l_name' => $this->l_name,
                'full_name' => $this->full_name,
                'name_title' => $this->name_title,
                'nick_name' => $this->nick_name,
                'user_id' => Auth::id(),
                'content_type' => $this->content_type,
                'about_content_star' => $this->about_content_star,
                's_image' => $image,
                'slug' => $slug,
            ]);
           
            foreach ($this->attributeColumn as $key => $value) {

                //    $x1[$value] =  $this->attributeValue[$key];
     
                //    $statusName= Status::select('status_name')->find($value) ;
               
                   CommonRelated::create([
                      'main_website_corner' => 22,
                      'corner_name' => 'النجوم',
                      'common_type_id' =>$this->attributeColumn[$key],
                    //   'type_name' => $statusName->status_name ,
                      'type_name' => $this->all_templates[$key]->status_name,
                      'start_id' => $starId->id,
                      'value' => $this->attributeValue[$key],
                      'url'=>$this->url[$key] 
                  ]);
            }


            DB::commit();

            FlashMsgTraits::created();

            $this->reset();

        } catch (\Exception $e) {

            DB::rollBack();

            FlashMsgTraits::created($msgType = 'error', $msg = $e->getMessage());

            return $e;
        }

      
    }

    public function addQuestion()
    {
        $this->attributeValue[] = '';
    }


    public function removeQuestion($index)
    {
        unset($this->attributeValue[$index]);
        $this->attributeValue = array_values($this->attributeValue);
    }

    #[Computed()]
    public function contentTypes()
    {
        return Status::where('p_id_sub', config('constant.contentTypeId'))->get();
    }
    public function render()
    {
        return view('livewire.dashboard.stars.create');
    }
}
