<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\Course;
use App\Models\Questionnaire;
use App\Models\QuestionnaireAnswer;
use App\Models\User;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function show(Course $course, User $user)
    {
        $answers = QuestionnaireAnswer::whereHas('questionnaire_answer', 
                    function($q) use($course){
                        $q->whereCourseId($course->id);
                    })->whereOwnerId($user->id)
                      ->get();

        $assessments = Assessment::where(
                            'course_id' , $course->id
                            )->where(
                                'owner_id' , $user->id
                                )
                        ->get();
        return view( 'dashboard.assessments.index', 
            compact('answers', 'assessments', 'course', 'user')
        );
    }


    public function store(Request $request, Course $course, User $user)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $assessment = Assessment::create([
            'message'   => $request->get('message'),
            'fellow_id' => $request->user()->id,
            'owner_id'  => $user->id,
            'course_id' => $course->id
        ]);

        if ($assessment instanceof Assessment) {
            alert()->success('با موفقیت ذخیره شد!');
        }

        return redirect()->back();

    }
}
