<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() {

        $announcements = Announcement::where('is_accepted',true)
        ->orderBy('created_at' , 'desc')
        ->take(5)->get();
        
        return view('welcome' , compact('announcements'));
    }

    public function announcementsByCategory($name, $category_id)
    {
        $category = Category::find($category_id);
        $announcements = $category->announcements()
        ->where('is_accepted',true)
        ->orderBy('created_at' , 'desc')
        ->paginate(5);
        return view('announcements', compact('category', 'announcements'));
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $announcements = Announcement::search($q)->get();
        return view('search_results', compact('q', 'announcements')); 
    }
}
