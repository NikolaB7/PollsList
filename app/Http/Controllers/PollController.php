<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use Illuminate\Support\Facades\View;

class PollController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response|View
     */
public function index(){

    return view('index');
}

    public function getPoll()
    {
        return View('poll');
    }

    public function storePoll(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'required',
//            'answer4' => 'required',
//            'answer5' => 'required',
        ]);

        $polls = Poll::firstOrCreate(['question' => $request->input('question')],
            ['answer1' => $request->input('answer1')],
            ['answer2' => $request->input('answer2')],
            ['answer3' => $request->input('answer3')],
            ['answer4' => $request->input('answer4')],
            ['answer5' => $request->input('answer5')]);
        $request->session()->put('polls', $polls);

        $request->session()->get('polls')->update($request->all());

        return redirect()->action('PollController@pollCreated');
    }

    public function pollCreated()
    {
        return view('pollSuccess');
    }


    public function showPoll($id)
    {
       $polls = Poll::findOrFail($id);

       return view('polls',compact('polls'));
    }



}