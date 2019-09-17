<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    public static function index()
    {
       $projects = Project::all();

        return $projects;
    }
}
