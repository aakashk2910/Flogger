<?php

namespace App\Http\Controllers;

use App\fileentry;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\In;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function uploaddoc() {

            $entry = new fileentry();
            $extension = Input::file('image')->getClientOriginalExtension();
            /*Input::file('image')->move(
                base_path() . '/public/storage/' , Input::file('image')-Input::file('image')>getFilename() . '.' . $extension);*/
            Storage::disk('local')->put(Input::file('image')->getFilename().'.'.$extension,  File::get(Input::file('image')));
            $entry->userid = Auth::user()->id;
            $entry->type = "doc";
            $entry->mime = Input::file('image')->getClientMimeType();
            $entry->filename = Input::file('image')->getFilename() . '.' . $extension;
            $entry->originalfilename = Input::file('image')->getClientOriginalName();
            $entry->save();

        return redirect('/home');

    }
    public function uploadimg() {

        $entry = new fileentry();
        $extension = Input::file('image')->getClientOriginalExtension();
        /*Input::file('image')->move(
            base_path() . '/public/storage/' , Input::file('image')-Input::file('image')>getFilename() . '.' . $extension);*/
        Storage::disk('local')->put(Input::file('image')->getFilename().'.'.$extension,  File::get(Input::file('image')));
        $entry->userid = Auth::user()->id;
        $entry->type = "img";
        $entry->mime = Input::file('image')->getClientMimeType();
        $entry->filename = Input::file('image')->getFilename() . '.' . $extension;
        $entry->originalfilename = Input::file('image')->getClientOriginalName();
        $entry->save();

        return redirect('/home');

    }

    public function uploadmedia() {

        $entry = new fileentry();
        $extension = Input::file('image')->getClientOriginalExtension();
        /*Input::file('image')->move(
            base_path() . '/public/storage/' , Input::file('image')-Input::file('image')>getFilename() . '.' . $extension);*/
        Storage::disk('local')->put(Input::file('image')->getFilename().'.'.$extension,  File::get(Input::file('image')));
        $entry->userid = Auth::user()->id;
        $entry->type = "media";
        $entry->mime = Input::file('image')->getClientMimeType();
        $entry->filename = Input::file('image')->getFilename() . '.' . $extension;
        $entry->originalfilename = Input::file('image')->getClientOriginalName();
        $entry->save();

        return redirect('/home');

    }

    public function uploadsdoc() {

        $entry = new fileentry();
        $extension = Input::file('image')->getClientOriginalExtension();
        /*Input::file('image')->move(
            base_path() . '/public/storage/' , Input::file('image')-Input::file('image')>getFilename() . '.' . $extension);*/
        Storage::disk('local')->put(Input::file('image')->getFilename().'.'.$extension,  File::get(Input::file('image')));
        $entry->userid = Auth::user()->id;
        $entry->type = "sdoc";
        $entry->mime = Input::file('image')->getClientMimeType();
        $entry->filename = Input::file('image')->getFilename() . '.' . $extension;
        $entry->originalfilename = Input::file('image')->getClientOriginalName();
        $entry->save();

        return redirect('/home');

    }
    public function uploadsimg() {

        $entry = new fileentry();
        $extension = Input::file('image')->getClientOriginalExtension();
        /*Input::file('image')->move(
            base_path() . '/public/storage/' , Input::file('image')-Input::file('image')>getFilename() . '.' . $extension);*/
        Storage::disk('local')->put(Input::file('image')->getFilename().'.'.$extension,  File::get(Input::file('image')));
        $entry->userid = Auth::user()->id;
        $entry->type = "simg";
        $entry->mime = Input::file('image')->getClientMimeType();
        $entry->filename = Input::file('image')->getFilename() . '.' . $extension;
        $entry->originalfilename = Input::file('image')->getClientOriginalName();
        $entry->save();

        return redirect('/home');

    }

    public function uploadsmedia() {

        $entry = new fileentry();
        $extension = Input::file('image')->getClientOriginalExtension();
        /*Input::file('image')->move(
            base_path() . '/public/storage/' , Input::file('image')-Input::file('image')>getFilename() . '.' . $extension);*/
        Storage::disk('local')->put(Input::file('image')->getFilename().'.'.$extension,  File::get(Input::file('image')));
        $entry->userid = Auth::user()->id;
        $entry->type = "smedia";
        $entry->mime = Input::file('image')->getClientMimeType();
        $entry->filename = Input::file('image')->getFilename() . '.' . $extension;
        $entry->originalfilename = Input::file('image')->getClientOriginalName();
        $entry->save();

        return redirect('/home');

    }

    public function download($filename){

        $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
        return (new Response($file, 200))
            ->header('Content-Type', $entry->mime);
    }

    public function test()
    {
        return view('test');
    }
}
