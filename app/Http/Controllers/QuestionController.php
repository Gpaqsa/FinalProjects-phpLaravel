<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\question;

class QuestionController extends Controller
{
    //
    public function add(Request $request ){
        $request->validate([
            'question'=>'required',
            'opta' => 'required',
            'optb' => 'required',
            'optc' => 'required',
            'optd' => 'required',
            'answer' => 'required',
        ]);

        $qu=new question();
        $qu->question=$request->question;
        $qu->a=$request->opta;
        $qu->b=$request->optb;
        $qu->c=$request->optc;
        $qu->d=$request->optd;
        $qu->answer=$request->answer;

        $qu->save();
        Session::put("SuccessMessage", "Question successfully Added");
        return redirect('question');


    }
}
