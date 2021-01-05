<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Headlines;

class MainController extends Controller
{
    public function index() {
    	$titles = Headlines::all();
    	return view("index", compact('titles'));
    }

    public function insert(Request $req) {
    	if ($req->isMethod('post')) {
	    	$title = $req->input('title');
	    	$data = new Headlines;
	    	$data->title = $title;
	    	$data->save();
    	}
    	return redirect("/");
    }

    public function logout() {
    	Auth::logout();
    	return redirect("/");	
    }
}
