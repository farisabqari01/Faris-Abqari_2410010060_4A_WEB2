<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Game;
use App\Models\Schedule;
use App\Models\Social;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [

            'totalGames' => Game::count(),

            'totalSchedules' => Schedule::count(),

            'totalSocials' => Social::count(),

            'about' => About::first(),

            'latestGames' => Game::latest()
                                ->take(5)
                                ->get(),

            'latestSchedules' => Schedule::orderBy('stream_date')
                                         ->take(5)
                                         ->get()

        ]);
    }
}