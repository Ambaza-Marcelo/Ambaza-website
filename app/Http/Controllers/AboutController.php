<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::paginate(10);
        return view('backend.about.index',compact('abouts'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

     public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=500,min_height=300',

        ]);

        $storagepath = $request->file('image')->store('public/abouts');
        $fileName = basename($storagepath);

        $data = $request->all();
        $data['image'] = $fileName;

        About::create($data);

        return redirect()->route('admin-about-list');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts = About::whereid($id)->first();
        //
        return view('backend.about.edit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:2048|dimensions:min_width=1900,min_height=1200',

        ]);

        $about = About::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('image')){
            $file_path = "public/abouts/".$about->image;
            Storage::delete($file_path);

            $storagepath = $request->file('image')->store('public/abouts');
            $fileName = basename($storagepath);
            $data['image'] = $fileName;

        }

        $about->fill($data);
        $about->save();

        return redirect()->route('admin-about-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $about = About::findOrFail($id);
        $file_path = "public/abouts/".$about->image;
            Storage::delete($file_path);
        $about->delete();
        return redirect()->back();
    }
}
