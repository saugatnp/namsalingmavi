<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Album;
use App\Models\Notice;

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
    public function add(Request $request){
        
        $this->validate($request, [
            'title' => 'required'
        ]);
        if (str_replace(url('/'), '', url()->previous()) == "/dash-board/gallery") {
            $album = new Album;
            $album->title = $request->input('title');
            $album->save();
            return redirect('/dash-board/gallery')->with('success', 'New Album Added');
        }
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/examroutine"){
            $routine = new Post;
            $routine->key='routine';
            $routine->title=$request->input('title');
            $routine->value=$request->input('title');
            $routine->image='noimage.jpg';
            $routine->save();
            return redirect('/dash-board/examroutine')->with('success' , 'New Routine Added');
        }
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/notice"){
            $notice = new Notice;
            $notice->title=$request->input('title');
            $notice->image=$request->input('image');
            $notice->save();
            return redirect('/dash-board/notice')->with('success' , 'New Notice Added');
        }
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/bot"){
            $routine = new Post;
            $routine->key='teacher';
            $routine->title=$request->input('title');
            $routine->value=$request->input('title');
            $routine->image='noimage.jpg';
            $routine->save();
            return redirect('/dash-board/bot')->with('success' , 'New Faculty Added');
        }
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/smsc"){
            $routine = new Post;
            $routine->key='smc';
            $routine->title=$request->input('title');
            $routine->value=$request->input('title');
            $routine->image='noimage.jpg';
            $routine->save();
            return redirect('/dash-board/smsc')->with('success' , 'New Faculty Added');
        }
    }
    public function notice(){
        $notice = DB::table('notices')->get();
        return view('backends.notice')->with('notice',$notice);
    }
    public function schoolprofile(){
        $profile = Post::where('key' , 'schoolprofile')->get();
        return view('backends.schoolprofile')->with('profile' , $profile);
    }
    public function bot(){
        $teacher = Post::where('key' ,'teacher')->get();
        $principal = Post::where('key' , 'principal')->get();
        $viceprincipal = post::where('key' , 'viceprincipal')->get();
        return view('backends.bot')->with('principal' , $principal)->with('viceprincipal' , $viceprincipal)->with('teacher' , $teacher);
    }
    public function smsc(){
        $smsc = Post::where('key' , 'smc')->get();
        return view('backends.smsc')->with('smsc' , $smsc);
    }

}
