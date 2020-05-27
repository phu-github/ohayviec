<?php

namespace App\Http\Controllers;

use App\Http\Components\UtilComponent;
use Illuminate\Http\Request;
use App\Candidate;
use App\Area;

class CandidateController extends Controller
{
    public function getAmountCandidate(Request $request){
    	$area =new Area();
    	$cadidate = new Candidate();
		$inputs = [
	            'keywordCan' => $request->input('keywordCan', ''),
	            'oldCan' => $request->input('oldCan', ''),
	            'addressCan' => $request->input('addressCan', ''),
	            'dateCan' => $request->input('dateCan', ''),
        ];

		$cities = $area->getCityNameModel();
		$amountCadidate = $cadidate->getCandidateModal($inputs)->count();
    	return response()->json($amountCadidate);
    }

    public function fetchJsonFindCandidate(Request $request){
     	if($request->ajax()){
	     	$area =new Area();
	    	$cadidate = new Candidate();
	    	$utilComponent = new UtilComponent();
	    	$valueCheckbox = $utilComponent->getValueOfCheckBox($request);
			$inputs = [
		            'keywordCan' => $request->input('keywordCan', ''),
		            'oldCan' => $request->input('oldCan', ''),
		            'addressCan' => $request->input('addressCan', ''),
		            'dateCan' => $request->input('dateCan', ''),
	        ];
	    	$viewMoreCandidate = $request->input('viewMoreCandidate', 0);
			$cities = $area->getCityNameModel();
			$canditateSearch = $cadidate->getCandidateModal($inputs)->offset($viewMoreCandidate*10)->limit(10)->get(); 
	    	return response()->json($canditateSearch);
    	}
    }

	public function fetchJsonPostProfile(Request $request){
     	if($request->ajax()){
	     	return 1;
    	}
    }
}
