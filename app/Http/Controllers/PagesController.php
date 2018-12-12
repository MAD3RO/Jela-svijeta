<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Jela svijeta';
    	return view('pages.index')->with('title', $title);
    }

    public function category(){
    	$title = 'Categories';
    	return view('pages.category')->with('title', $title);
    }

    public function ingredients(){
    	$title = 'Ingredients';
    	return view('pages.ingredients')->with('title', $title);
    }
}
