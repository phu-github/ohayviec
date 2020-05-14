<?php

namespace App\Http\Controllers;

use App\Http\Components\UtilComponent;
use Illuminate\Http\Request;
use App\Area;
use App\Job;

		

class JobController extends Controller
{
    public function getSearch(Request $request){
        $area = new Area();
		$inputs = [
	            'keyword' => $request->input('keyword', ''),
	            'city' => $request->input('city', ''),
	            'date' => $request->input('date', ''),
	            'salary' => $request->input('salary', ''),
        ];
		$cities = $area->getCityNameModel();
        return view('home',compact('inputs','cities'));
    }

 	public function fetchJsonFindJob(Request $request){
     	if($request->ajax()){
     	 	$job = new Job();
     	 	$area = new Area();
     	 	$inputs = [
	            'keyword' => $request->input('keyword', ''),
	            'city' => $request->input('city', ''),
	            'date' => $request->input('date', ''),
	            'salary' => $request->input('salary', ''),
        	];
            // $viewMoreJob = $request->input('viewMoreJob', 9);
        	$cities = $area->getCityNameModel();
     	 	$amountJobs = $job->getSearchModel($inputs,$viewMoreJob)->count();
 	 		$jobSearch = $job->getSearchModel($inputs, $viewMoreJob); 
    		return response()->json($jobSearch);
    	}
    }
    public function fetchViewMoreJob(Request $request){
        $job = new Job();
        $viewMoreJob = $request->input('viewMoreJob', '');

    }
	public function fetchJsonPostJob(Request $request){
     	return 1;
    }

// Khu vực test, có thể xóa
		
// end khu vuc test
   

}
