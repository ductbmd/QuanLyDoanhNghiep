<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\File;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
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
    public function uploadIndex()
    {
        $files=File::where('type',1)->select('url','file_name')->orderBy('created_at', 'desc')->get();
        return view('upload')->with('files',$files);
    }
    public function store(Request $request)
    {
        if ( $request->file('file') ) {
        $fileUploaded=$request->file('file');
         Storage::putFileAs( 'public/photos', $fileUploaded, $fileUploaded->getClientOriginalName(), 'public');
         $file_link="storage/photos/".$fileUploaded->getClientOriginalName();
         $file_name=$fileUploaded->getClientOriginalName();
        $description="Demo";
         File::create([
            'url' => $file_link,
            'file_name' => $file_name,
            'description' =>  $description,
            'type' =>  1,
            
        ]);
        }
        return redirect()->back();
    }
}
