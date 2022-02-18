<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index()
    {
    	$services = Service::paginate(10);
    	return view('backend.service.index',compact('services'));
    }

    public function create()
    {
    	return view('backend.service.create');
    }

     public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=500,min_height=300',

        ]);

        $storagepath = $request->file('image')->store('public/services');
        $fileName = basename($storagepath);

        $data = $request->all();
        $data['image'] = $fileName;

        Service::create($data);

        return redirect()->route('admin-service-list');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$service = Service::whereid($id)->first();
        //
        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2048|dimensions:min_width=30,min_height=30',

        ]);

        $service = Service::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('image')){
            $file_path = "public/services/".$service->image;
            Storage::delete($file_path);

            $storagepath = $request->file('image')->store('public/services');
            $fileName = basename($storagepath);
            $data['image'] = $fileName;

        }

        $service->fill($data);
        $service->save();

        return redirect()->route('admin-service-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $services = Service::findOrFail($id);
        $file_path = "public/services/".$services->image;
            Storage::delete($file_path);
        $services->delete();
        return redirect()->back();
    }
}
