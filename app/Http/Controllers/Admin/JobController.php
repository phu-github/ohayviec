<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function view(){
    	$job = new Job();
    	$jobData = $job->getSearchModel(null)->paginate(7);
    	return view('admin.job', compact('jobData'));
    }
    public function edit(){
    	return view('');
    }
    public function delete(){
		return view('');
    }
}

