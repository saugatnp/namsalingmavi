<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public function booklist(){
        $book = Post::where('key' ,'book')->get();
        return view('backends.booklist')->with('book' , $book);

    }
    public function examroutine(){
        $routine = Post::where('key' , 'routine')->get(); 
        return view('backends.examroutine')->with('routine' , $routine);
    }
    public function gallery(){
        $album = DB::table('albums')->get();
        return view('backends.gallery')->with('album' , $album);
    }
}
