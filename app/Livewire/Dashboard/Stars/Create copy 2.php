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
    public $full_name = '';
    public $description = '';
    public $about_content_star = '';
    public $content_type = [];
    public $s_image;
    public $all_templates = [];
    public $attributeColumn = [];   // dropdown value
    public $attributeValue = [''];
    public $x1;
    public $url = [];
    public $profileImage = '';

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

        if ($this->profileImage) {
            $image = UploadingFilesTrait::uploadSingleFile($this->profileImage, 'star_profile_image', 'public');
        }



        $slug = Str::slug($this->full_name);

        DB::beginTransaction();

        try {
            $starId = ContentStar::create([

                'full_name' => $this->full_name,
                'name_title' => $this->name_title,
                'description' => $this->description,
                'user_id' => Auth::id(),
                'content_type' => $this->content_type,
                'about_content_star' => $this->about_content_star,
                's_image' => $image,
                'slug' => $slug,
            ]);

            foreach ($this->attributeColumn as $key => $value) {


                CommonRelated::create([
                    'main_website_corner' => 22,
                    'corner_name'         => 'النجوم',
                    'common_type_id'      => $this->attributeColumn[$key],
                    'type_name'           => $this->all_templates[$key]->status_name,
                    'star_id'            => $starId->id,
                    'value'               => $this->attributeValue[$key],
                    'url'                 => $this->url[$key]
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

    #[Computed()]
    public function titleNames()
    {
        return Status::where('p_id_sub', config('constant.titleNames'))->get();
    }



    public function render()
    {
        return view('livewire.dashboard.stars.create');
    }
}
