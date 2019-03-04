<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\CourtCase;
use App\CaseType;
use App\CaseUpdate;
use App\User;
use App\Court;

class CaseController extends Controller
{
    //
    public function index()
    {
    	# code...
        $cases = App\CourtCase::all();
        $casetypes = App\CaseType::all();
        $users = App\User::all();
        $courts = App\Court::all();

        $data = array(
        	'cases' => $cases, 
        	'casetypes' => $casetypes, 
        	'users' => $users, 
        	'courts' => $courts
        );
        return view('cases/cases', $data);

    }

    public function casetypes()
    {
    	# code...
        $casetypes = App\CaseType::all();

        $data = array(
            'casetypes' => $casetypes
        );
        return view('cases/casetypes', $data);    	
    }

    public function caseupdates()
    {
        # code...
        $cases = App\CourtCase::all();
        $casetypes = App\CaseType::all();
        $users = App\User::all();
        $courts = App\Court::all();

        $data = array(
            'cases' => $cases, 
            'casetypes' => $casetypes, 
            'users' => $users, 
            'courts' => $courts
        );
        return view('cases/caseupdates', $data);    
    }

    public function caseupdate($id)
    {
        # code...
        $case = App\CourtCase::where('id', $id)
               ->first();

        $data = array(
            'case' => $case,
            'id' => $id
        );
        return view('cases/caseupdate', $data);    
    }

    public function caseupdatecreate($id)
    {
        # code...
        $cases = App\CourtCase::all();
        $casetypes = App\CaseType::all();
        $users = App\User::all();
        $courts = App\Court::all();

        $data = array(
            'cases' => $cases, 
            'casetypes' => $casetypes, 
            'users' => $users, 
            'courts' => $courts,
            'id' => $id
        );
        return view('cases/caseupdate', $data);  
    }

    public function caseupdateedit($id, $edit)
    {
        # code...

    }

    public function store(Request $request)
    {
        # code...
        $casetype = new CaseType;

        $casetype->name = $request->name;
        $casetype->sname = $request->sname;
        $casetype->tname = $request->tname;

        $casetype->save();
        return redirect()->back();
    }

    public function casestore(Request $request)
    {
        # code...
        $courtcase = new CourtCase;

        $courtcase->caseno = $request->caseno;
        $courtcase->description = $request->description;
        $courtcase->sdescription = $request->sdescription;
        $courtcase->tdescription = $request->tdescription;

        $casetype = App\CaseType::find($request->casetype);
        $courtcase->casetype()->associate($casetype);

        $court = App\CourtType::find($request->court);
        $courtcase->court()->associate($court);

        $user = App\CourtType::find($request->user);
        $courtcase->client()->associate($user);

        $courtcase->save();
        return redirect()->back();
    }
}
