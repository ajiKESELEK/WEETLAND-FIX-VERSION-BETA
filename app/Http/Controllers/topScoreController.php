<?php

namespace App\Http\Controllers;

use App\Models\Skor;
use Illuminate\Support\Facades\DB;


class topScoreController extends Controller
{
    public function index()
    {
        $topScores = DB::table('skors')
                        ->select('skors.user_id', 'users.name', DB::raw('MAX(skors.score) as max_score'))
                        ->join('users', 'skors.user_id', '=', 'users.id')
                        ->groupBy('skors.user_id', 'users.name')
                        ->orderByDesc('max_score') // Mengurutkan skor tertinggi di atas
                        ->get();

        return view('top-score', compact('topScores'));
    }
}
