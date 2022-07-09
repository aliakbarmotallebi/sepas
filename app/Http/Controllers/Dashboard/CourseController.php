<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Product;
use App\Models\User;
use App\Repositories\CourseRepository;
use App\Traits\ImageUpload;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * [Description CourseController].
 */
class CourseController extends DashboardController
{
    use ImageUpload;

    /**
     * @var CourseRepository
     */
    protected CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $courses = Course::query();

        if ( $request->has('q') ){
            $courses =  $courses        
                            ->where('title', 'LIKE', "%{$request->get('q')}%")
                            ->orWhere('body', 'LIKE', "%{$request->get('q')}%");
        }

        $courses = $courses->latest()->paginate(15);

        return view($this->theme.'courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select([
            'id', 'label',
            ])->get();
        $users = User::instructors()->select([
            'id', 'username',
        ]);

        return view($this->theme.'courses.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:courses|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|array',
            "category_id.*"  => "required|numeric",
            'topics' => 'required',
            'requirements' => 'required',
            'instructor_id' => 'required|exists:users,id',
            'unit' => 'required|in:IRR,USD',
            'type' => 'required|in:ONLINE,OFFLINE,BOTH',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $request->merge([
            'image_url' => $this->uploadImage(
                request()->file('image')
            ),
        ]);

        $course = $request
                ->user()
                ->courses()
                ->create($request->all());

        $course->categories()->attach(
            array_filter( $request->get('category_id') )
        );

        if ($course instanceof Course) {
            alert()->success('با موفقیت ایجاد شد!');
        }

        return redirect()->route('dashboard.courses.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::select([
            'id', 'label',
            ])->get();
        $users = User::instructors()->select([
            'id', 'username',
        ]);

        return view($this->theme.'courses.edit', compact('categories', 'users', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'sometimes|array',
            "category_id.*"  => "sometimes|numeric",
            'topics' => 'required',
            'requirements' => 'required',
            'instructor_id' => 'required|exists:users,id',
            'unit' => 'required|in:IRR,USD',
            'type' => 'required|in:ONLINE,OFFLINE,BOTH',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        if ($request->has('image')) {
            $request->merge([
                'image_url' => $this->uploadImage(
                    request()->file('image')
                ),
            ]);
        }

        if ($request->has('category_id')) {
            $course->categories()->sync(
                array_filter( $request->get('category_id') )
            );
        }

        $course = $course->update($request->all());
 
        if ($course) {
            alert()->success('با موفقیت ویرایش شد!');
        }

        return redirect()->route('dashboard.courses.index');
    }

    public function uploadVideo(Request $request, Course $course)
    {
        $request->validate([
            'video' => 'required|file|mimes:avi,mp4',
        ]);

        $video = request()->file('video');

        $date = new Carbon();
        $imagePath = "/upload/videos/{$date->year}/{$date->month}/";

        $name = md5(Str::random(25)).'.'.$video->getClientOriginalExtension();

        $fullImageName = "{$imagePath}{$name}";

        $video->move(public_path($imagePath), $name);


        $course->video_url = $fullImageName;
        $course->save();

        if ($video) {
            alert()->success('با موفقیت ویرایش شد!');
        }

        return redirect()->back();

    }

    public function uploads(Course $course)
    {
        return view(
            $this->theme.'courses.uploads',
            compact('course')
        );
    }
}
