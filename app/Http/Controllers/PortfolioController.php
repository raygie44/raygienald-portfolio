<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        return view('portfolio', ['p' => config('portfolio')]);
    }
}
