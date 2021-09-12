<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
        public function calc($score_1,$addition, $score_2)
    {
        return view('message.calc', ['score_1' => $score_1,'addition' => $addition, 'score_2' => $score_2]);
    }
}
