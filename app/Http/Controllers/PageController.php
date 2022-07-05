<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Service;
use App\Models\Project;

class PageController extends Controller
{

    public function index(){
        $latests = Article::latest()->take(3)->where('status', 'published')->get();
        $services = Service::all();
        $projects = Project::all();
        return view('index', compact('latests', 'services', 'projects'));
    }

    public function services(){
        $services = Service::all();
        return view('services', compact('services'));
        
    }

    public function about(){
        $services = Service::all();
        return view('about', compact('services'));
    }

    public function contact(){
        return view('contact');
    }

    public function projects(){
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function news(){
        $latests = Article::where('status', 'published')->paginate(6);
        return view('news', compact('latests'));
    }

   

}
