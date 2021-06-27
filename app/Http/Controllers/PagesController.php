<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
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
