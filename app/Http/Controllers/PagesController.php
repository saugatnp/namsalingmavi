<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Album;
use App\Models\Imagee;
use App\Models\Notice;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

//contains code to fetch data for main pages
class PagesController extends Controller
{
    //function to fetch all the albums and also the first image from the album to display in the gallery page
    public function gallery()
    {
        $img = Imagee::select('album_id', 'photo')->get();
        $album = DB::table('albums')->get();
        return view('pages.gallery')->with('album', $album)->with('images', $img);
    }
    //function to fetch images from the selected album after receiving album id as params
    public function images($id)
    {
        $title = Album::where('id', $id)->get();
        $images = Imagee::where('album_id', $id)->get();
        return view('pages.images')->with('image', $images)->with('title', $title);
    }
    //function to fetch all the notices
    public function notice()
    {
        $notice = DB::table('notices')->orderBy('created_at', 'desc')->paginate(2);
        return view('pages.notice')->with('notice', $notice);
    }
    //function to fetch the detailes notice with the notice id passed in the parameter
    public function noticedetail($id)
    {
        $viewnotice = Notice::where('id', $id)->get();
        return view('pages.noticedetail')->with('detail', $viewnotice);
    }
    //function for library page
    public function library()
    {
        return view('pages.library');
    }
    //function for contact us page
    public function contactus()
    {
        return view('pages.contactus');
    }
    //function to display the content of school profile page
    public function schoolprofile()
    {
        $post = Post::where('key', 'schoolprofile')->get();
        return view('pages.aboutus.schoolprofile')->with('post', $post);
    }
    //function to fetch the faculty members list
    public function bot()
    {
        $principal = Post::where('key', 'principal')->get();
        $viceprincipal = Post::where('key', 'viceprincipal')->get();
        $teach = Post::where('key', 'teacher')->get();
        return view('pages.aboutus.bot')->with('teach', $teach)->with('principal', $principal)->with('viceprincipal', $viceprincipal);
    }
    //function to fetch the comittee members list
    public function smsc()
    {
        $smc = Post::where('key', 'smc')->get();
        return view('pages.aboutus.smsc')->with('smc', $smc);
    }
    //
    public function pcomittee(){
        $p = Post::where('key','pcom')->get();
        return view('pages.aboutus.pcomittee')->with('pcomittee', $p);
    }
    //function to display the booklist 
    public function booklist($id = '14')
    {
        $post = Post::where('id', $id)->get();
        $book = Post::where('key', 'book')->get();
        return view('pages.academics.booklist')->with('post', $post)->with('book', $book);
    }
    //function for result page.
    public function examresult()
    {
        return view('pages.academics.examresult');
    }
    //function to view all the exam routine
    public function examroutine()
    {
        $routine = Post::where('key', 'routine')->get();
        return view('pages.academics.examroutine')->with('routine', $routine);
    }
    //function to download booklist images
    public function download($id){
        $download = Post::where('id' , $id)->get();
        foreach( $download as $down)
            return response()->download( storage_path('app/public/images/'.$down->image ));
    }
}
