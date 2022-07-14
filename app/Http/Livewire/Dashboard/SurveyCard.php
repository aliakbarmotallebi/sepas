<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use App\Models\Course;
use App\Models\Survey;
use App\Models\Transaction;
use Livewire\Component;

class SurveyCard extends Component
{
    public $fellows;

    public $users;

    public $course;

    public $fellowId;

    public function mount(Course $course, User $user)
    {
        $this->course = $course;

        $this->user   = $user;
    }

    public function getFellowName()
    {
        $name = Survey::whereOwnerId($this->user->id)
                    ->whereCourseId($this->course->id)
                    ->first();

        return $name->fellow->fullname ??
               $name->fellow->username ?? null;
    }

    public function getTransaction()
    {
        return Transaction::whereOwnerId($this->user->id)
                    ->whereTransactableType(Course::class)
                    ->whereTransactableId($this->course->id)
                    ->whereStatus('COMPLETED')
                    ->first();
    }

    public function updatedFellowId()
    {

        if($this->fellowId == ""){
            Survey::where([
                'owner_id'  => $this->user->id,
                'course_id' => $this->course->id
            ])->delete();

            return false;
        }

     
        Survey::updateOrCreate(
            ['owner_id' => $this->user->id, 'course_id' => $this->course->id],
            [
                'fellow_id' => $this->fellowId,
                'owner_id'  => $this->user->id,
                'course_id' => $this->course->id
            ]
        );

        
    }

    public function render()
    {
        $this->fellows = User::fellowUsers()
            ->get();

        return view('livewire.dashboard.survey-card');
    }
}
