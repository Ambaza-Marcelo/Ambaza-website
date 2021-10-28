<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encourage;
use App\Service;

class EncourageController extends Controller
{
    public function index()
    {
    	$encourages = Encourage::with('service')->paginate(10);
    	return view('backend.encourage.index',compact('encourages'));
    }

    public function create()
    {
    	$services = Service::get();
    	return view('backend.encourage.create',compact('services'));
    }

     public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:5|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=500,min_height=300',
            'service_id' => 'required',

        ]);

        $storagepath = $request->file('image')->store('public/encourages');
        $fileName = basename($storagepath);

        $data = $request->all();
        $data['image'] = $fileName;

        Encourage::create($data);

        return redirect()->route('admin-encourage-list');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encourage  $encourage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$encourage = Encourage::whereid($id)->first();
        //
        return view('backend.encourage.edit', compact('encourage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encourage  $encourage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required|min:5|max:255',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2048|dimensions:min_width=1900,min_height=1200',
            'service_id' => 'required',

        ]);

        $encourage = Encourage::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('image')){
            $file_path = "public/encourages/".$encourage->image;
            Storage::delete($file_path);

            $storagepath = $request->file('image')->store('public/encourages');
            $fileName = basename($storagepath);
            $data['image'] = $fileName;

        }

        $encourage->fill($data);
        $encourage->save();

        return redirect()->route('admin-encourage-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encourage  $encourage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $encourage = Encourage::findOrFail($id);
        $file_path = "public/encourages/".$encourage->image;
            Storage::delete($file_path);
        $encourage->delete();
        return redirect()->back();
    }
}
