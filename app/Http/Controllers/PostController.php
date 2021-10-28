<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(10);
    	return view('backend.post.index',compact('posts'));
    }

    public function create()
    {
    	return view('backend.post.create');
    }

     public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:5|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=500,min_height=300',

        ]);

        $storagepath = $request->file('image')->store('public/posts');
        $fileName = basename($storagepath);

        $data = $request->all();
        $data['image'] = $fileName;

        Post::create($data);

        return redirect()->route('admin-post-list');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$post = Post::whereid($id)->first();
        //
        return view('backend.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
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

        $post = Post::findOrFail($id);
        $data = $request->all();

        if($request->hasFile('image')){
            $file_path = "public/posts/".$post->image;
            Storage::delete($file_path);

            $storagepath = $request->file('image')->store('public/posts');
            $fileName = basename($storagepath);
            $data['image'] = $fileName;

        }

        $post->fill($data);
        $post->save();

        return redirect()->route('admin-post-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::findOrFail($id);
        $file_path = "public/posts/".$post->image;
            Storage::delete($file_path);
        $post->delete();
        return redirect()->back();
    }
}
