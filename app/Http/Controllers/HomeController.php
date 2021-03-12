<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Mail\RequestReceived;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AnnouncementRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function newAnnouncement()
    {

        return view('announcement.new', );
    }

    public function createAnnouncement(AnnouncementRequest $request)
    {

        $a = new Announcement();
        $a->title = $request->input('title');
        $a->price = $request->input('price');
        $a->body = $request->input('body');
        $a->category_id=$request->input('category');
        $a->user_id= Auth::id();
        $a->save();

        return redirect('/')->with('announcement.create.success','ok');
    }
   
    public function revisorCreate()
    {
        return view('revisor.create');
    }

    public function revisorStore(Request $request)
    { 
    //     $name = $request->input('name'); 
    //     $email = $request->input('email');
    //     $body = $request->input('body');
        // $contatto = [$name,$email,$body];
        $contatto = $request->all();
        Mail::to('amministratore@presto.it')->send(new RequestReceived($contatto));
        return redirect('/')->with('message2', 'richiesta inviata');
    }

}
