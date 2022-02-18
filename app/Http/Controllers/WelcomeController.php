<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SiteMeta;
use App\News;
use App\Encourage;
use App\About;
use App\Post;
use App\Service;


class WelcomeController extends Controller
{
    //
    public function home()
    {


        $news = DB::table('news')->orderBy('created_at','desc')->first();
        $newz = DB::table('news')->first();
        $services = Service::all();
        $encourages = Encourage::with('service')->get();

        return view('welcome', compact(
            'news',
            'newz',
            'services',
            'encourages'
            
        ));
    }

    /**
     * subscriber  manage
     * @return mixed
     */
    public function subscribe(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Emails is invalid!'
            ];

            return $response;
        }

        $subscriber = SiteMeta::create([
            'meta_key' => 'subscriber',
            'meta_value' => $request->get('email')
            ]);

        return back()->with('success','Thank your for subscribing us.');


    }

    public function gallery()
    {
        //for get request
        $pictures = SiteMeta::where('meta_key','gallery')->paginate(20);

        return view('frontend.gallery', compact('pictures'));

    }
    /*
    public function event(){
        $events = Event::orderBy('created_at','desc');
        return view('frontend.event',compact('events'));
    }
    */

    public function service()
    {
        $services = Service::all();
        return view('frontend.services',compact('services'));
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        $news = News::orderBy('created_at','desc')->get();
        $encourages = Encourage::orderBy('created_at','desc')->paginate(10);

        return view('frontend.blog',compact('posts','news','encourages'));
    }

    /* Contact Us
     * @return mixed
     */
    public function contactUs(Request $request)
    {
        //for save on POST request
        if ($request->isMethod('post')) {//

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'name' => 'required|min:2|max:255',
                'message' => 'required|min:5|max:500',
            ]);

            if ($validator->fails()) {
                $response = [
                    'info' => 'error',
                    'message' => 'Input is invalid! Check it again!'
                ];

                return response()->json($response);
            }

            //now send mail
            $data = [
                'from' =>  $request->get('email'),
                'to'  => env('MAIL_RECEIVER','ambazamarcellin2001@gmail.com'),
                'subject' => "[".$request->get('name')."]".$request->get('subject'),
                'body' => $request->get('message')
            ];

          Mail::send(array(), array(), function ($message) use ($data) {
                $message->to($data['to'])
                ->subject($data['subject'])
                ->from($data['from'])
                ->setBody($data['body']);
            });

            $response = [
                'info' => 'success',
                'message' => 'Mail delivered to receiver. Will contact you soon.'
            ];

            return response()->json($response);


        }

    }

    public function about()
    {
        $abouts = DB::table('abouts')->first();
        $encourages = Encourage::with('service')->get();
        return view('frontend.about',compact('abouts','encourages'));
    }
}
