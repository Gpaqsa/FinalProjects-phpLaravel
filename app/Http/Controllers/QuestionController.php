<?php

namespace App\Http\Models;
namespace App\Http\Controllers;

// use App\question;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        // $qu = question::create([
        //     'question' => $request->question,
        //     'a' => $request->opta,
        //     'b' => $request->optb,
        //     'c' => $request->optc,
        //     'd' => $request->optd,
        //     'answer' => $request->answer,
        // ]);
        $qu->save();
        Session::put("SuccessMessage", "Question successfully Added");
        return redirect('questions');
    }

    public function show()
    {
        $qs=question::all();

        return view('questions')->with(['questions'=>$qs]);
    }

    public function update(Request $request ){
        $request->validate([
            'question'=>'required',
            'opta' => 'required',
            'optb' => 'required',
            'optc' => 'required',
            'optd' => 'required',
            'answer' => 'required',
            'id' => "required",
        ]);

        $qu=question::find($request->id);

        $qu->question=$request->question;
        $qu->a=$request->opta;
        $qu->b=$request->optb;
        $qu->c=$request->optc;
        $qu->d=$request->optd;
        $qu->answer=$request->answer;

        // $qu = question::create([
        //     'question' => $request->question,
        //     'a' => $request->opta,
        //     'b' => $request->optb,
        //     'c' => $request->optc,
        //     'd' => $request->optd,
        //     'answer' => $request->answer,
        // ]);
        $qu->save();
        Session::put("SuccessMessage", "Question successfully Update");
        return redirect('questions');
    }


    public function delete(Request $request ){
        $validate=$request->validate([
            'id' => 'required'
        ]);
        
        question::where('id'.$request->id)->delete();
        Session::put("SuccessMessage", "Question successfully Deleted");
        return redirect('questions');
    }
}
