<?php

namespace App\Models;

use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Announcement extends Model
{
    use Searchable;
    public function toSearchableArray()
    {
        $array = $this->toArray();
        
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'price'=>$this->price,
            'body'=>$this->body,
            'altro'=>'annuncio annunci'
        ];

        return $array;
    }

    use HasFactory;
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    static public function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->count();
    }
}
