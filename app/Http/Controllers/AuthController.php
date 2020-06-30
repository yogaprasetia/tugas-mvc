<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
    	return view('form');
    }

    public function welcome(Request $request) {
    	$data = array(
    		'nama_depan' => $request['first_name'],
    		'nama_belakang' => $request['last_name']
    	);
    	return view('welcome', $data);
    }
}
