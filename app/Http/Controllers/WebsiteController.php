<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function index()
    {
        $user = User::inRandomOrder()->first()->get();
        $project = Project::orderByDesc('id')->get();
        return view('website.index' , compact('user' , 'project'));
    }
}
