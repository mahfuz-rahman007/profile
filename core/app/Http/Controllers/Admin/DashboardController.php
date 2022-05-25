<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Client;
use App\Funfact;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        $services = Service::all();
        $blogs = Blog::all();
        $clients = Client::all();
        $portfolios = Portfolio::all();

        $funfacts = Funfact::orderBy('id','DESC')->get();


        return view('admin.dashboard', compact('services','blogs','clients','portfolios','funfacts'));
    }
}
