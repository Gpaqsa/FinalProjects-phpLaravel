<?php

namespace App\Http\Models;
namespace App\Http\Controllers;

// use App\question;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Contoller;

class QuestionController extends Controller
{
    //
    public function add(Request $request )
    {
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
        Session::put("successMessage", "Question successfully Added");
        return redirect('questions');
    }

    public function show()
    {
        $qs=question::all();

        return view('questions')->with(['questions'=>$qs]);
    }

    public function update(Request $request )
    {
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

        $qu->save();
        Session::put("successMessage", "Question successfully Update");
        return redirect('questions');
    }


    public function delete(Request $request )
    {
        $validate=$request->validate([
            'id' => 'required'
        ]);
        
        question::where('id'.$request->id)->delete();
        Session::put("successMessage", "Question successfully Deleted");
        return redirect('questions');
    }
    
    public function startquiz()
    {
        Session::put("nextQuestion", '1');
        Session::put("wrongAnswer", '0');
        Session::put("correctAnswer", '0');
        
        $qu=question::all()->first();

        return view('answerDesk')->with(['question'=>$qu]);

    }

    public function submitAnswer(Request $request)
    {
        $nextQuestion=Session::get("nextQuestion", '1');
        $wrongAnswer = Session::get("wrongAnswer", '0');
        $correctAnswer=Session::get("correctAnswer", '0');
        $validate=$request->validate([
            'answer'=>'required',
            'dbanswer'=>'required',
        ]);

        $nextQuestion=Session::get("nextQuestion");
        $nextQuestion+=1;

        if ($request->dbanswer==$request->answer)
        {
            # code...
            $correctAnswer+=1;
        }else
        {
            $wrongAnswer+=1;
        }
        
        Session::put("nextQuestion", $nextQuestion);
        Session::put("wrongAnswer", $wrongAnswer);
        Session::put("correctAnswer", $correctAnswer);


        $i=0;

        $questions=question::all();

        foreach($questions as $question)
        {
            $i++;
            if($questions->count()< $nextQuestion)
            {
                return view('end');
            }

            if($i==$nextQuestion)
            {
                return view('answerDesk')->with(['question'=>$question]);
            }
        }
    }
}
