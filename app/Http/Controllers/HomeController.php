<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use App\Mail\RequestReceived;
use App\Models\AnnouncementImage;
use App\Jobs\GoogleVisionLabelImage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeSearchImage;
use App\Http\Requests\AnnouncementRequest;
use App\Models\User;

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

    public function showProfile()
    {   
        return view('auth.profile');
    }

    public function showUserAnnouncements()
    {   
       
        return view('auth.announcements');
    }

    public function index()
    {
        return view('home');
    }

    public function newAnnouncement(Request $request)
    {
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())), 16, 36));

        return view('announcement.new', compact('uniqueSecret'));
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

        $uniqueSecret = $request->input('uniqueSecret');
        $images = session()->get("images.{$uniqueSecret}",[]);
        $removedImages = session()->get("removedimages.{$uniqueSecret}",[]);

        $images = array_diff($images, $removedImages);
        if(count($images)<= 0){
            $i=new AnnouncementImage();
            $i->announcement_id=$a->id;
            $i->file= 'resources/images/gatto.jpeg';
            $i->save();
        }else{
        
            foreach ($images as $image){
            $i = new AnnouncementImage();

            $fileName = basename($image);
            $newFileName = "public/announcements/{$a->id}/{$fileName}";
            Storage::move($image,$newFileName);

            
            $i->file=$newFileName;
            $i->announcement_id=$a->id;

            $i->save();
            GoogleVisionSafeSearchImage::withChain([
                new GoogleVisionLabelImage($i->id),
                new GoogleVisionRemoveFaces($i->id),
                new ResizeImage($i->file, 300, 150),
                new ResizeImage($i->file, 600, 400)
            ])->dispatch($i->id);

            }
        }
        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
        return redirect('/')->with('announcement.create.success','ok');
    }

    public function uploadImage(Request $request){

        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
        dispatch(new ResizeImage(
            $fileName, 
            120, 
            120
        ));

        session()->push("images.{$uniqueSecret}", $fileName);
        return response()->json(
              [
                  'id' => $fileName
              ]
            );
    }

    public function removeImage(Request $request)
    {
        $uniqueSecret = $request->input('uniqueSecret');

        $fileName = $request->input('id');

        session()->push("removedimages.{$uniqueSecret}", $fileName);

        Storage::delete($fileName);

        return response()->json('ok');
    }


    public function getImages(Request $request){
        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}",[]);
        $removedImages = session()->get("removedimages.{$uniqueSecret}",[]);

        $images = array_diff($images,$removedImages);

        $data=[];

        foreach($images as $image){
            $data[]=[
                'id'=>$image,
                'src'=>AnnouncementImage::getUrlByFilePath($image, 120, 120)
            ];
        }
        return response()->json($data);
    }


    public function revisorCreate()
    {
        return view('revisor.create');
    }

    public function revisorStore(Request $request)
    {
        $contatto = $request->all();
        Mail::to('amministratore@presto.it')->send(new RequestReceived($contatto));
        return redirect('/')->with('message2', 'richiesta inviata');
    }

    public function buyerContact()
    {   
        return view('buyer.contact');
    }

    public function buyerStore(Request $request)
    {
        $contatto = $request->all();
        Mail::to('amministratore@presto.it')->send(new ContactReceived($contatto));
        return redirect('/')->with('message2', 'richiesta inviata');
    }
}