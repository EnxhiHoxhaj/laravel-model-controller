<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }
    public function movie() {
        $movie= Movie::all();
        return view('movie', compact('movie'));
    }
    public function about() {
        return view('about');
    }
    public function contacts() {
        return view('contacts');
    }
}
