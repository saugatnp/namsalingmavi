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
            return view('pages.aboutus.bot');
    }
    public function login(){
        return view('pages.login');
    }
    public function smsc(){
            return view('pages.aboutus.smsc');
    }
    public function cont(){
        return view('pages.aboutus.cont');
    } 
    public function academicslevel(){
        return view('pages.academics.academicslevel');
    }
    public function booklist($id){
        // $post = Post::find($id);
        $post = Post::where('id' , $id)->get();
        $bookone = Post::where('key' , 'bookone')->get();
        $booktwo = Post::where('key' , 'booktwo')->get();
        $bookthree = Post::where('key' , 'bookthree')->get();
        $bookfour = Post::where('key' , 'bookfour')->get();
        $bookfive = Post::where('key' , 'bookfive')->get();
        $booksix = Post::where('key' , 'booksix')->get();
        $bookseven = Post::where('key' , 'bookseven')->get();
        $bookeight = Post::where('key' , 'bookeight')->get();
        $booknine = Post::where('key' , 'booknine')->get();
        $bookten = Post::where('key' , 'bookten')->get();
        return view('pages.academics.booklist')->with('bookone', $bookone)->with('booktwo', $booktwo)->with('bookthree', $bookthree)
        ->with('bookfour', $bookfour)->with('bookfive', $bookfive)->with('booksix', $booksix)->with('bookseven', $bookseven)
        ->with('bookeight', $bookeight)->with('booknine', $booknine)->with('bookten', $bookten)->with('post' , $post);
    }
    public function examresult(){
        return view('pages.academics.examresult');
    }
    public function examroutine(){
        return view('pages.academics.examroutine');
    }
    public function loginhome(){
        $principalmsgs = Post::where('key', 'pmsg')->get();
        $sectionone = Post::where('key' , 'secone')->get();
        $sectiontwo = Post::where('key' , 'sectwo')->get();
        $sectionthree = Post::where('key' , 'secthree')->get();
        $recentevent = Post::where('key' , 'recentevt')->get();
        $crouselone = Post::where('key' , 'crouselone')->get();
        $crouseltwo = Post::where('key' , 'crouseltwo')->get();
        $crouselthree = Post::where('key' , 'crouselthree')->get();
        return view('backends.home')->with('principalmsgs', $principalmsgs)->with('sectionone',$sectionone)->with('sectiontwo',$sectiontwo)->with('sectionthree',$sectionthree)
        ->with('recentevent', $recentevent)->with('crouselone' ,$crouselone)->with('crouseltwo' , $crouseltwo)->with('crouselthree' , $crouselthree);
        
    }
    
}
