<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Album;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function gallery(){
        // $user = DB::table('users_tb')->paginate(1);
        // $img = DB::table('images')->get();
        $img = Image::select('album_id' ,'photo')->get();
        $album = DB::table('albums')->get();
        return view('pages.gallery')->with('album' , $album)->with('images' , $img);
    }
    public function images($id){
        $title = Album::where('id' , $id)->get();
        $images = Image::where('album_id' , $id)->get();
        return view('pages.images')->with('image' , $images)->with('title' , $title);
    }
    public function notice(){
        return view('pages.notice');
    }
    public function library()
    {
        return view('pages.library');
    }
    public function contactus(){
        return view('pages.contactus');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function schoolprofile(){
        return view('pages.aboutus.schoolprofile');
    }
    public function bot(){
        $teach = Post::where('key' ,'timage')->get();
        return view('pages.aboutus.bot')->with('teach' ,$teach);
    }
    public function smsc(){
        return view('pages.aboutus.smsc');
    }
    public function cont(){
        return view('pages.aboutus.cont');
    } 
    
    public function booklist($id = '14'){
        $post = Post::where('id' , $id)->get();
        $book = Post::where('key' ,'book')->get();
        return view('pages.academics.booklist')->with('post' , $post)->with('book' , $book);
    }
    public function examresult(){
        return view('pages.academics.examresult');
    }
    public function examroutine(){
        $routine = Post::where('key' , 'routine')->get();
        return view('pages.academics.examroutine')->with('routine' , $routine);
    }
}
