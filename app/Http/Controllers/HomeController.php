<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Album;
use Intervention\Image\Facades\Image;
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
    //function to fetch home page dashboard data
    public function index()
    {
        $principalmsgs = Post::where('key', 'pmsg')->get();
        $sectionone = Post::where('key', 'secone')->get();
        $sectiontwo = Post::where('key', 'sectwo')->get();
        $sectionthree = Post::where('key', 'secthree')->get();
        $recentevent = Post::where('key', 'recentevt')->get();
        $recenteventtwo = Post::where('key' , 'recentevttwo')->get();
        $crouselone = Post::where('key', 'crouselone')->get();
        $crouseltwo = Post::where('key', 'crouseltwo')->get();
        $crouselthree = Post::where('key', 'crouselthree')->get();
        return view('backends.home')->with('principalmsgs', $principalmsgs)->with('sectionone', $sectionone)->with('sectiontwo', $sectiontwo)->with('sectionthree', $sectionthree)
            ->with('recentevent', $recentevent)->with('crouselone', $crouselone)->with('crouseltwo', $crouseltwo)->with('crouselthree', $crouselthree)->with('recenteventtwo' , $recenteventtwo);
    }
    //function to fetch booklist dashboard data
    public function booklist()
    {
        $book = Post::where('key', 'book')->get();
        return view('backends.booklist')->with('book', $book);
    }
    //function to fetch examroutine dashboard data
    public function examroutine()
    {
        $routine = Post::where('key', 'routine')->get();
        return view('backends.examroutine')->with('routine', $routine);
    }
    //function to fetch gallery dashboard data
    public function gallery()
    {
        $album = DB::table('albums')->get();
        return view('backends.gallery')->with('album', $album);
    }
    //function to add data into database
    public function add(Request $request)
    {

        $this->validate($request, [
            'title' => 'required'
        ]);
        //selects request from gallery and adds new album
        if (str_replace(url('/'), '', url()->previous()) == "/dash-board/gallery") {
            $album = new Album;
            $album->title = $request->input('title');
            $album->save();
            return redirect('/dash-board/gallery')->with('success', 'New Album Added');
        }
        //selects request from examroutine and adds new routine
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/examroutine") {
            $routine = new Post;
            $routine->key = 'routine';
            $routine->title = $request->input('title');
            //pass a default value we can edit it later
            $routine->value = $request->input('title');
            $routine->image = 'noimage.jpg';
            $routine->save();
            return redirect('/dash-board/examroutine')->with('success', 'New Routine Added');
        }
        //selects request from notice page and adds new notice
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/notice") {
         
            $notice = new Notice;
            $notice->title = $request->input('title');
            $x = 20;
            if ($request->hasFile('image')) {
                //get file name with extension
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                // get just file name 
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                // get just extension
                $extension = $request->file('image')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = 'FILE_' . time() . '.' . $extension;
                //upload image
                $image = $request->file('image');

                $img = Image::make($image);
                $img->save(\public_path('/storage/images/' . $fileNameToStore), $x);
            }

            //default value can edit it later
            $notice->image = $fileNameToStore;
            $notice->save();
            return redirect('/dash-board/notice')->with('success', 'New Notice Added');
        }
        //selects request from bot page 
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/bot") {
            $routine = new Post;
            $routine->key = 'teacher';
            $routine->title = $request->input('title');
            $routine->value = $request->input('title');
            $routine->image = 'noimage.jpg';
            $routine->save();
            return redirect('/dash-board/bot')->with('success', 'New Faculty Added');
        }
        //selects request ffrom smsc page
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/smsc") {
            $routine = new Post;
            $routine->key = 'smc';
            $routine->title = $request->input('title');
            $routine->value = $request->input('title');
            $routine->image = 'noimage.jpg';
            $routine->save();
            return redirect('/dash-board/smsc')->with('success', 'New Faculty Added');
        }
        //selects request from pcomittee
        elseif (str_replace(url('/'), '', url()->previous()) == "/dash-board/pcomittee") {
            $com = new Post;
            $com->key='pcom';
            $com->title = $request->input('title');
            $com->value = $request->input('title');
            $com->image = 'noimage.jpg';
            $com->save();
            return redirect('/dash-board/pcomittee')->with('success' , 'Member added');
        }
    }
    //function to fetch data for dashboard notice page
    public function notice()
    {
        $notice = DB::table('notices')->get();
        return view('backends.notice')->with('notice', $notice);
    }
    //function to fetch data for dashboard schoolprofile page
    public function schoolprofile()
    {
        $profile = Post::where('key', 'schoolprofile')->get();
        return view('backends.schoolprofile')->with('profile', $profile);
    }
    //function to fetch data for bot page
    public function bot()
    {
        $teacher = Post::where('key', 'teacher')->get();
        $principal = Post::where('key', 'principal')->get();
        $viceprincipal = post::where('key', 'viceprincipal')->get();
        return view('backends.bot')->with('principal', $principal)->with('viceprincipal', $viceprincipal)->with('teacher', $teacher);
    }
    //fucntion to fetch data for smsc page
    public function smsc()
    {
        $smsc = Post::where('key', 'smc')->get();
        return view('backends.smsc')->with('smsc', $smsc);
    }
    //function to fetch previous comittee member data
    public function pcomittee(){
        $p = Post::where('key', 'pcom')->get();
        return view('backends.pcomittee')->with('pcomittee', $p);
    }
}
