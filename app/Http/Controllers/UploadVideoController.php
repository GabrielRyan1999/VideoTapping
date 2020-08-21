<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUploadVideo;
use Illuminate\Support\Facades\Hash;
use App\ModelUser;
use App\ModelVideo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Auth;
use VideoThumbnail;
use Image;


class UploadVideoController extends Controller
{
    //
    
public function upload_vid(){
  
return view('templates.upload')->with(compact('video'));
}

public function search(Request $request){
   
        $cari = $request->cari;
        $cariVideo = ModelVideo::where('title', 'like', "%".$cari."%")->get();
        
         return view('templates.cari')->with(compact('cariVideo'));  
}

public function proses(Request $request){
  
   //if ($request->hasFile('input_video')) {
     //$this->validate($request, [
     //  'input_video' => 'required|file|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
       //]);
       $mapel= $request->mapel;
       $title=$request->input('title');
       $deskripsi=$request->input('deskripsi');
      $noinduk = Session::get('nomorinduk');
      $username = Session::get('name');
      $status = Session::get('status');

      $video = $request->file('input_video');
      $size=$video->getSize();
      $videoname = $video->getClientOriginalName();
      $extension = $video->getClientOriginalExtension();
      $judul = $title.'.'.$extension;
      //$video->save(public_path('/assets/videos' . $videoname));
      $video->move(public_path('/assets/videos'), $judul);
      
      $thumb = $request->file('thumbnail');
      $thumbname = $thumb->getClientOriginalName();
      $thumbext = $thumb->getClientOriginalExtension();
      $thumbjudul= $thumbname.'.'.$thumbext;
      
    $image_resize = Image::make($thumb->getRealPath());   
    $image_resize->resize(1280, 720);
    $image_resize->save(public_path('assets/thumbnail' .$thumbname));
      //$resize=Image::make($thumb)->resize(300,300);
      //$thumb->move(public_path('/assets/thumbnail'), $thumbname);
     // $time = time();

      $test = new ModelUploadVideo();
      $test->mapel=$mapel;
      $test->nomorinduk=$noinduk;
      $test->video=$videoname;
      $test->videoname=$title;
      $test->deskripsi=$deskripsi;
      $test->save();

      $coba = new ModelVideo();
      $coba->nomorinduk=$noinduk;
      $coba->username=$username;
      $coba->status=$status;
      $coba->mapel=$mapel;
      $coba->title=$title;
      $coba->judulvideo=$judul;    
      $coba->format=$extension;
      $coba->deskripsi=$deskripsi;
      $coba->sizevideo=$size;
      $coba->thumbnail=$thumbname;
      
      $coba->save();


      //$video->username = $request->name;
       //$username=Auth::User()->username;
      //$test->video=$videoname;
      // $test->video=$video;
    //}
    //$video = ModelUploadVideo::get();
    //return view('upload',['video' => $video]);
    return redirect('/gallery')->with('success', 'Images Video Successfully');
  }

}