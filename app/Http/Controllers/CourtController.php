<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Court;
use App\CourtType;
class CourtController extends Controller
{
    //

    public function courttypes()
    {
        # code...

        $court_types = App\CourtType::all();
        return view('courts/courttypes',  array('court_types' => $court_types));
        //return view('courts/courttypes');
    }


    public function courts()
    {
        # code...

        $courts = App\Court::all();
        $court_types = App\CourtType::all();
        return view('courts/courts',  array('courts' => $courts, 'courttypes' => $court_types));
        //return view('courts/courttypes');
    }

    public function create()
    {
    	# code...
    }

    public function store(Request $request)
    {
        # code...
        $courttype = new CourtType;

        $courttype->name = $request->name;
        $courttype->description = $request->description;
        $courttype->sname = $request->sname;
        $courttype->sdescription = $request->sdescription;
        $courttype->tname = $request->tname;
        $courttype->tdescription = $request->tdescription;

        $courttype->save();
        return redirect()->back();
    }

    public function storecourt(Request $request)
    {
        # code...
        $court = new Court;

        $court->name = $request->name;
        $court->sname = $request->sname;
        $court->tname = $request->tname;
        $courttype = App\CourtType::find($request->type);

        $courttype->courts()->save($court);
        $court->save();
        return redirect()->back();
    }

    public function edit()
    {
    	# code...
    }
}
