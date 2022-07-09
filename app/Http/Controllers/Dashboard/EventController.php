<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class EventController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $events = Event::query();

        if ( $request->has('q') ){
            $events =  $events        
                            ->where('title', 'LIKE', "%{$request->get('q')}%")
                            ->orWhere('body', 'LIKE', "%{$request->get('q')}%");
        }

        $events = $events->latest()->paginate(15);

        return view('dashboard.events.index', 
            compact('events')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.events.create');
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
            'title' => 'required|unique:events,title|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'schedule_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $request->merge([
            'image_url' => $this->uploadImage(
                request()->file('image')
            ),
        ]);

        $event = $request
                ->user()
                ->events()
                ->create($request->all());

        if ($event instanceof Event) {
            alert()->success('با موفقیت ایجاد شد!');
        }

        return redirect()->route('dashboard.events.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard.events.edit', 
            compact('event')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|unique:events,title|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'schedule_at' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        if ($request->has('image')) {
            $request->merge([
                'image_url' => $this->uploadImage(
                    request()->file('image')
                ),
            ]);
        }

        $event->update($request->all());

        if ($event) {
            alert()->success('با موفقیت ویرایش شد!');
        }

        return redirect()->route('dashboard.events.index');
    }


}
