<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteMeta;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Helpers\AppHelper;

class SiteController extends Controller
{
    //
     public function dashboard()
    {

        $subscribers = SiteMeta::where('meta_key', 'subscriber')->count();
        $photos = SiteMeta::where('meta_key', 'gallery')->count();
        return view('backend.site.dashboard', compact(
            'subscribers',
            'photos'
        ));
    }
    /**
     * subscriber  manage
     * @return mixed
     */
    public function subscribe(Request $request)
    {
        //for get request
        $subscribers = SiteMeta::where('meta_key', 'subscriber')->get();
        return view('backend.site.home.subscribers', compact('subscribers'));
    }

      public function serviceContent(Request $request)
    {
        //for save on POST request
        if ($request->isMethod('post')) {//
            $this->validate($request, [
                'meta_value' => 'required|min:5|max:500'

            ]);

            //now crate or update model
            $content = SiteMeta::updateOrCreate(
                ['meta_key' => 'our_service_text'],
                $request->all()
            );
            return redirect()->route('site.service')->with('success', 'Contents saved!');
        }

        //for get request
        $content = SiteMeta::where('meta_key', 'our_service_text')->first();
        return view('backend.site.home.service', compact('content'));
    }


    /**
     * About gallery content manage
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function gallery()
    {


        //for get request
        $images = SiteMeta::where('meta_key','gallery')->paginate(20);

        return view('backend.site.gallery.content', compact('images'));
    }
    /**
     * About gallery content add
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function galleryAdd(Request $request)
    {

        //for save on POST request
        if ($request->isMethod('post')) {
            //validate form
            $messages = [
                'image.max' => 'The :attribute size must be under 2MB.',
            ];
            $this->validate($request, [
                'image' => 'mimes:jpeg,jpg,png|max:3072',
            ]);

            $storagepath = $request->file('image')->store('public/gallery');
            $fileName = basename($storagepath);

            //now crate
            SiteMeta::create(
                [
                    'meta_key' => 'gallery',
                    'meta_value' => $fileName
                ]
            );

            return redirect()->route('site.gallery_image')->with('success', 'Image uploaded');
        }

        return view('backend.site.gallery.image');
    }

    /**
     * About gallery content image delete
     * @return array
     */
    public function galleryDelete($id)
    {

        $image = SiteMeta::findOrFail($id);
        $file_path = "/public/gallery/".$image->meta_value;
            Storage::delete($file_path);
        Storage::delete('/public/gallery/' . $image->meta_value);
        $image->delete();

        return redirect()->back();
    }


    /**
     * contact us manage
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contactUs(Request $request)
    {
        
    }

}
