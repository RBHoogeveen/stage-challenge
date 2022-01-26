<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ChallengeService;

class ChallengeController extends Controller
{
    public function show()
    {
        $totalscore = (new ChallengeService())->getTotalScoreOfNames();

        return view('challenge', compact('totalscore'));
    }
}
