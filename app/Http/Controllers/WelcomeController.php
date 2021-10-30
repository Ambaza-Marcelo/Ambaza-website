<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SiteMeta;
use App\Slider;
use App\PointKey;
use App\Event;
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

        $sliders = DB::table('sliders')->orderBy('created_at','desc')->first();
        $ourService = SiteMeta::where('meta_key', 'our_service_text')->first();
        $pointKeys = PointKey::orderBy('created_at','desc')->paginate();


        $news = DB::table('news')->orderBy('created_at','desc')->first();
        $newz = DB::table('news')->first();

        $events = DB::table('events')->orderBy('created_at','desc')->first();
        $eventz = DB::table('events')->first();
        $services = Service::all();
        $encourages = Encourage::with('service')->get();

        return view('welcome', compact(
            'sliders',
            'ourService',
            'pointKeys',
            'news',
            'newz',
            'events',
            'eventz',
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
        $pictures = SiteMeta::where('meta_key','gallery')->get();

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
                'to'  => env('MAIL_RECEIVER','marcelin@net-telecom.net'),
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
        //for get request
        $address = SiteMeta::where('meta_key', 'contact_address')->first();
        $phone = SiteMeta::where('meta_key', 'contact_phone')->first();
        $email = SiteMeta::where('meta_key', 'contact_email')->first();
        $latlong = SiteMeta::where('meta_key', 'contact_latlong')->first(); 
        return view('frontend.contact_us', compact('address', 'phone', 'email'));

    }

    /*
    public function faq()
    {

        $faqs = SiteMeta::where('meta_key','faq')->get();
        return view('frontend.faq', compact('faqs'));

    }

    */

    public function about()
    {
        $abouts = DB::table('abouts')->first();
        $encourages = Encourage::with('service')->get();
        return view('frontend.about',compact('abouts','encourages'));
    }
}
