<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        dd($request->all());
        $a = new Announcement();
        $a->title = $request->input('title');
        $a->price = $request->input('price');
        $a->body = $request->input('body');
        $a->category_id=$request->input('category');
        $a->user_id= Auth::id();
        $a->save();
       
        return redirect('/')->with('announcement.create.success','ok');
    }

}
