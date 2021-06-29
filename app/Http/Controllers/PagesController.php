<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function home(){
        $principalmsgs = Post::where('key', 'pmsg')->get();
        $sectionone = Post::where('key' , 'secone')->get();
        $sectiontwo = Post::where('key' , 'sectwo')->get();
        $sectionthree = Post::where('key' , 'secthree')->get();
        $recentevent = Post::where('key' , 'recentevt')->get();
        return view('pages.home')->with('principalmsgs', $principalmsgs)->with('sectionone',$sectionone)->with('sectiontwo',$sectiontwo)->with('sectionthree',$sectionthree)->with('recentevent', $recentevent);
    }
    public function academics(){
        return view('pages.academics');
    }
    public function gallery(){
        return view('pages.gallery');
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
    public function academicslevel(){
        return view('pages.academics.academicslevel');
    }
    public function booklist(){
        return view('pages.academics.booklist');
    }
    public function examresult(){
        return view('pages.academics.examresult');
    }
    public function examroutine(){
        return view('pages.academics.examroutine');
    }
}
