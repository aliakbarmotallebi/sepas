<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;

class CampaignController extends DashboardController
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaigns = Campaign::latest()->paginate(10);
        return view('dashboard.campaigns.index', 
            compact('campaigns')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.campaigns.create');
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
            'title' => 'required|unique:campaigns,title|max:255',
            'description' => 'required',
            'total_price' => 'required|numeric',
            'safir_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $request->merge([
            'image_url' => $this->uploadImage(
                request()->file('image')
            ),
        ]);

        $campaign = $request
                ->user()
                ->campaigns()
                ->create($request->all());

        if ($campaign instanceof Campaign) {
            alert()->success('با موفقیت ایجاد شد!');
        }

        return redirect()->route('dashboard.campaigns.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        return view('dashboard.campaigns.edit', 
            compact('campaign')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'title' => 'required|unique:campaigns,title|max:255',
            'description' => 'required',
            'total_price' => 'required|numeric',
            'safir_name' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        if ($request->has('image')) {

            $request->merge([
                'image_url' => $this->uploadImage(
                    request()->file('image')
                ),
            ]);
        }

        $campaign->update($request->all());

        if ($campaign instanceof Campaign) {
            alert()->success('با موفقیت ویرایش شد!');
        }

        return redirect()->route('dashboard.campaigns.index');
    }

}
