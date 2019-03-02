<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
	
	
	
	public function index(Request $request){
		return view('admin.index');
		}
	
	public function register(Request $request){
		return view('admin.register');
		}
		
	public function forgot(Request $request){
		return view('admin.forgot');
		}

	public function dashboard(Request $request){
		return view('admin.dashboard');
		}
	
}
