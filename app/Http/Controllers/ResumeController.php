<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\professionalSkill;

class ResumeController extends Controller
{
    public function __invoke(Request $request)
    {
        // Your controller logic here
    }

    public function resume(){
        $professionalSkill = professionalSkill::all();
      
    	 return view('resume',compact("professionalSkill"));
        // return view('resume')->with('skills',$professionalSkill);
    }
}
