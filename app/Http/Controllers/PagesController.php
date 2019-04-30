<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }

    public function about(){
        $title = "This is About";
    	return view('pages.about')->with('title', $title);
    }

    public function service(){
        $data = array(
            'title' => 'Our Services',
            'services' => [ 'PHP', 'Java', 'C#', 'Networking']
        );
    	return view('pages.services')->with($data);
    }

    public function blog(){
    	return view('pages.blog');
    }
}
