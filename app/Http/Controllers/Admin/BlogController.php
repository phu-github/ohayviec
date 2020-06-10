<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Blog;

class BlogController extends Controller
{
    public function view(){
    	return view('admin.blog');
    }
    public function edit(){
    	return view('');
    }
    public function delete(){
		return view('');
    }
}
