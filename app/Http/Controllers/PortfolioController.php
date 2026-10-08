<?php

namespace App\Http\Controllers;

use App\Support\Portfolio;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        return view('portfolio', ['p' => Portfolio::data()]);
    }
}
