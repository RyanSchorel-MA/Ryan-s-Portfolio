<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Project;
 
 
class ProjectController extends Controller
{
    public function add() {
        $projects = new Project();
        // definieer de velden
        $projects->title       = 'Ryan is de best';
        $projects->description = 'mijn verhaal is de best';
        $projects->active      = true;
        // sla het model op
        $projects->save();      
    }
 
    public function index() {
        $projects = Project::all();
 
        return view(
            'projects.index',
            [
                'projects' => $projects,
            ]
        );
    }
}

