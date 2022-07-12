<?php

namespace App\Http\Livewire\Dashboard\Course;

use App\Models\Course;
use App\Models\Questionnaire;
use Livewire\Component;

class Question extends Component
{
    public $label;

    public $type;

    public $rows = [];

    public $counter = 1;

    public $course;

    public $updateMode = false;

    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function add(int $key)
    {
        $key = $key + 1;
        $this->counter = $key;
        array_push($this->rows ,$key); 
    }

    public function remove(int $key)
    {
        unset($this->rows[$key]);
    }

    private function resetInputFields(){
        $this->label = '';
        $this->type = '';
    }


    public function store()
    {
        $this->validate([
            'label.0' => 'required',
            'type.0' => 'required',
            'label.*' => 'required',
            'type.*' => 'required',
        ],
        [
            'label.0.required' => 'فیلد سوال الزامی است',
            'type.0.required' => 'فیلد نوع سوال الزامی است',
            'label.*.required' => 'فیلد سوال الزامی است',
            'type.*.required' => 'فیلد نوع سوال الزامی است',
        ]);

        foreach ($this->label as $key => $value) {
            $this->course->questionnaires()->create([ 
                'label' => $this->label[$key], 
                'type'  => $this->type[$key]
            ]);
        }

        $this->rows = [];

        $this->resetInputFields();

        session()->flash('message', 'سوالات با موفقیت انجام شد');

    }

    public function render()
    {
        return view('livewire.dashboard.course.question');
    }
}
