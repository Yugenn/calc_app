<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
        public function result($score_1,$operator, $score_2)
    {
        $result = '';

        if ($operator == 'addition' ) {
            $result = $score_1 + $score_2;
        } elseif ($operator == 'subtraction' ) {
            $result = $score_1 - $score_2;
        } elseif ($operator == 'multiplication' ) {
            $result = $score_1 * $score_2;
        } elseif ($operator == 'division' ) {
            $result = $score_1 / $score_2;
        } else {
            $result ='演算子を確認してください';
        } 
        
        return view('message.calc', ['result' => $result]);
    }
}
