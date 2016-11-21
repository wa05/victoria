<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notice;

class PublicController extends Controller
{
    public function getSingle($slug)
    {
    	$post = Notice::where('slug', '=', $slug)->first();

    	return view('secciones.pages.single')->withPost($post);
    }

    public function getblog()
    {

    	$posts = Notice::orderBy('id','desc')->paginate(6);

    	return view('secciones.pages.index')->withPosts($posts);
    }

    public function welcome()
    {
        $posts = Notice::orderBy('id','desc')->take(3)->get();

        return view('home.home')->withPosts($posts);
    }
    public function discografia()
    {
        return view('secciones.pages.discografia');
    }
}
