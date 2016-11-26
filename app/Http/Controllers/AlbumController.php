<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Image;
use Session;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::orderBy('id','desc')->paginate(3);
        return view('admin.albums.index')->withAlbums($albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = Album::all();
        return view('admin.albums.create')->withAlbums($albums);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, array(
                'name'         => 'required|max:255',
                'description'      => 'max:255'                
            ));

        
        //store in the DB
        $album = new Album;
        $album->name = $request->name;
        $album->description = $request->description;

        //save our image
        if($request->hasFile('cover_image')){
            $image = $request->file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);

            Image::make($image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location);

            $album->cover_image = $filename;
        }
        $album->save();

        //redirect to another page
        Session::flash('success', 'El album fue cargado exitosamente!');

        return redirect()->route('album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::find($id);
        return view('admin.albums.single')->withAlbum($album);
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
        $album = Album::find($id);
        $album->delete();

        Session::flash('success', 'Album Eliminado');
        return redirect()->route('album.index');

    }
}
