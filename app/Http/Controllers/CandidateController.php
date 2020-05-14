<?php

namespace App\Http\Controllers;

use App\Http\Components\UtilComponent;
use Illuminate\Http\Request;
use App\Candidate;
use App\Area;

class CandidateController extends Controller
{
    public function getSearch(Request $request){
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
    	
		$cities = $area->getCityNameModel();
		$canditateSearch = $cadidate->getCandidateModal($inputs); 
		$amountCadidates = $cadidate->getCandidateModal($inputs)->count();
    	return view('candidate.ungtuyen',compact('inputs','cities','canditateSearch','amountCadidates','valueCheckbox'));
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
	    	
			$cities = $area->getCityNameModel();
			$canditateSearch = $cadidate->getCandidateModal($inputs); 
			$amountCadidates = $cadidate->getCandidateModal($inputs)->count();
	    	return response()->json($canditateSearch);
    	}
    }
    // public function 
	public function fetchJsonPostProfile(Request $request){
     	if($request->ajax()){
	     	return 1;
    	}
    }
}
