<?php

namespace App\Http\Controllers;

use App\Http\Components\UtilComponent;
use Illuminate\Http\Request;
use App\Candidate;
use App\Area;
use App\Job;


class UtillController extends Controller
{
    public function index(Request $request){
    	$job = new Job();
    	$cadidate = new Candidate();
    	
    	return view('home',compact('inputs','cities','amountJobs','amountCadidates'));
    }
}
