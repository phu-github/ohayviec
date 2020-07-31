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
    public function editBlog(){
    	return view('');
    }
    public function deleteBlog(){
		return view('');
    }
    public function addBlog(){
		return view('');
    }
}
