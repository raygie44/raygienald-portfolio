<?php

namespace App\Http\Controllers;

use App\Support\Portfolio;

class ProjectController extends Controller
{
    public function show(string $slug)
    {
        $project = Portfolio::find($slug);

        abort_if($project === null, 404);

        return view('projects.show', ['p' => Portfolio::data(), 'project' => $project]);
    }
}
