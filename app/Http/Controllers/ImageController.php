<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Album;
use Storage;
use Image;
use App\Photo;
use Session;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::orderBy('album_id')->paginate(12);

        return view('admin.photos.index')->withPhotos($photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $albumid = $request->_albumid;
        
        $files = $request->file('file');
        $file_count = count($files);
        $uploadcount = 0;

        if(!empty($files)):
            foreach($files as $file):
                $photo = new Photo;
                $photo->description = "-";
                $photo->album_id = $albumid;
                $image = $file;
                $filename = time() . $uploadcount . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/' . $filename);

                Image::make($image)->resize(null, 500, function ($constraint) {
                $constraint->aspectRatio();
                 })->save($location);

                $uploadcount ++;

                $photo->image = $filename;
                $photo->save();

            endforeach;
        endif;

            if($uploadcount == $file_count){
              Session::flash('success', 'Upload successfully'); 
              return redirect()->route('album.index');
            } 
            else {
              return redirect()->route('album.index')->withInput()->withErrors($validator);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        Storage::delete($photo->image);
        $photo->delete();

        return redirect()->route('fotos.index');

    }
}
