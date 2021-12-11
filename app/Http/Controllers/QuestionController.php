<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function add(Request $request)
    {
        $validate=$request->validate([
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ans'=>'required',
        ]);
        $q=new question();
        $q->question=$request->question;
        $q->a=$request->opa;
        $q->b=$request->opb;
        $q->c=$request->opc;
        $q->d=$request->opd;
        $q->ans=$request->ans;

        $q->save();
        session()->flash('successMessage',"Question Successfully Added");
        return redirect('questions');
    }

    public function show(){

        $qs=question::all();
        return view('questions')->with(['questions'=>$qs]);
    }

    public function update(Request $request)
    {
        $validate=$request->validate([
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ans'=>'required',
            'id'=>'required',
        ]);
        $q=question::find($request->id);
        $q->question=$request->question;
        $q->a=$request->opa;
        $q->b=$request->opb;
        $q->c=$request->opc;
        $q->d=$request->opd;
        $q->ans=$request->ans;

        $q->save();
        session()->flash('successMessage',"Question Successfully Updated");
        return redirect('questions');
    }

    public function delete(Request $request){
        $validate=$request->validate([
            'id'=>'required',
        ]);

        question::where('id',$request->id)->delete();
        session()->flash('successMessage',"Question Successfully Delete");
        return redirect('questions');
    }

    public function startquiz(){
        session()->flash('nextq',"1");
        session()->flash('wrongans',"0");
        session()->flash('correctans',"0");

        $q=question::all()->first();

        return view('answerDesk')->with(['question'=>$q]);
    }

    public function submitans(Request $request){
        $nextq=session()->get('nextq');;
        $wrongans=session()->get('wrongans');;
        $correctans=session()->get('correctans');;
        $validate=$request->validate([
            'ans'=>'required',
            'dbans'=>'required',
        ]);
        $nextq+=1;

        if($request->dbans==$request->ans){
            $correctans+=1;
        }
        else{
            $wrongans+=1;
        }

        session()->flash('nextq',$nextq);
        session()->flash('wrongans',$wrongans);
        session()->flash('correctans',$correctans);

        $i=0;
        $questions= question::all();
        foreach($questions as $question){
            $i++;
            if($questions->count() <$nextq)
            {
                return view('end');
            }
            if($i==$nextq)
            {
                return view('answerDesk')->with(['question'=>$question]);
            }
        }
    }
}
