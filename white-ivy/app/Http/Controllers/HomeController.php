<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Game;
use App\Models\Schedule;
use App\Models\Social;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();

        $games = Game::latest()
            ->take(6)
            ->get();

        $schedules = Schedule::orderBy('stream_date')
                     ->take(5)
                     ->get();

        $socials = Social::latest()->get();

        return view('home', compact(
            'about',
            'games',
            'schedules',
            'socials'
        ));
    }
}