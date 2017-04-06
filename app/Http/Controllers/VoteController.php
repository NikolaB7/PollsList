<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getVotes()
    {
        return view('voting');
    }

}
