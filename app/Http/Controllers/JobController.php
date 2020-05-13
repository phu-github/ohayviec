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
    	$job = new Job();
    	$utilComponent = new UtilComponent();
    	$valueCheckbox = $utilComponent->getValueOfCheckBox($request);
		$inputs = [
	            'keyword' => $request->input('keyword', ''),
	            'city' => $request->input('city', ''),
	            'date' => $request->input('date', ''),
	            'salary' => $request->input('salary', ''),
        ];
    	
		$cities = $area->getCityNameModel();
		$jobSearch = $job->getSearchModel($inputs); 
		$amountJobs = $job->getSearchModel($inputs)->count();
    	return view('home1',compact('inputs','cities','jobSearch','amountJobs','valueCheckbox'));
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
        	$cities = $area->getCityNameModel();
     	 	$amountJobs = $job->getSearchModel($inputs)->count();
 	 		$jobSearch = $job->getSearchModel($inputs); 
    		return response()->json($jobSearch);
    	}
    }

	public function fetchJsonPostJob(Request $request){
     	return 1;
    }

// Khu vực test, có thể xóa
		
// end khu vuc test
   

}
