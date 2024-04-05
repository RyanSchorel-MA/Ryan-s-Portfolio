<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function add() {
        $project->titel       = 'Mijn titel';
        $project->description = 'mijn verhaal';
        $project->active      = true;   
    }
}
