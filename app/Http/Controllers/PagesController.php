<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Album;
use App\Models\Image;
use App\Models\Notice;
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
        $notice = DB::table('notices')->get();
        return view('pages.notice')->with('notice' , $notice);
    }
    public function noticedetail($id)
    {
        $viewnotice = Notice::where('id' , $id)->get();
        return view('pages.noticedetail')->with('detail',$viewnotice);
    }
    public function library()
    {
        return view('pages.library');
    }
    public function contactus(){
        return view('pages.contactus');
    }
    public function schoolprofile(){
        $post = Post::where('key' ,'schoolprofile')->get();
        return view('pages.aboutus.schoolprofile')->with('post' , $post);
    }
    public function bot(){
        $principal = Post::where('key' , 'principal')->get();
        $viceprincipal = Post::where('key' , 'viceprincipal')->get();
        $teach = Post::where('key' ,'teacher')->get();
        return view('pages.aboutus.bot')->with('teach' ,$teach)->with('principal' , $principal)->with('viceprincipal' , $viceprincipal);
    }
    public function smsc(){
        $smc = Post::where('key' , 'smc')->get();
        return view('pages.aboutus.smsc')->with('smc' , $smc);
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
