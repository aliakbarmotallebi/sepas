<?php

namespace App\Http\Livewire\Dashboard\Course;

use App\Models\Category;
use App\Models\Course;
use Livewire\Component;

class Create extends Component
{

    public string $title;
    
    public string $description;

    public string $image_url;

    public string $price;

    public string $video_url;

    public string $topics;

    public string $requirements;

    public string $instructor_id;

    public string $type;

    public string $unit;

    public $category_id;

    public $categories;

    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->image_url = '';
        $this->price = '';
        $this->video_url = '';
        $this->topics = '';
        $this->requirements = '';
        $this->instructor_id = '';
        $this->type = '';
        $this->unit = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'price' => 'required',
            'video_url' => 'required',
            'topics' => 'required',
            'requirements' => 'required',
            'instructor_id' => 'required',
            'type' => 'required',
            'unit' => 'required',
        ]);
   
        Course::create(request()->all());
  
        $this->resetInputFields();
    }

    

    public function render()
    {
        $this->categories = Category::select(['id', 'label'])->get();

        return view('livewire.dashboard.course.create');
    }
}
