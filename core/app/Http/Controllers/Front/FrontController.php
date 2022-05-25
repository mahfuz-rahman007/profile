<?php

namespace App\Http\Controllers\Front;

use App\Bcategory;
use App\Blog;
use App\Client;
use App\Education;
use App\Experience;
use App\Funfact;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Pricing;
use App\Scategory;
use App\Service;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $educations = Education::orderBy('id','DESC')->get();

        $experiences = Experience::orderBy('id','DESC')->get();

        $scategories = Scategory::with('skills')->orderBy('id','DESC')->get();

        $services = Service::where('status',1)->get();

        $portfolios = Portfolio::orderBy('id','DESC')->limit(9)->get();

        $clients = Client::orderBy('id','DESC')->get();


        $pricingplans = Pricing::where('status',1)->get();

        $blogs = Blog::where('status',1)->orderBy('id','DESC')->limit(3)->get();

        $funfacts = Funfact::orderBy('id','DESC')->get();

        $testimonials = Testimonial::orderBy('id', 'DESC')->limit(9)->get();


        return view('front.index' , compact( 'testimonials','funfacts','educations','experiences','scategories','services','portfolios','clients','pricingplans','blogs',));
    }

    public function servicedetails($slug){

        $service = Service::where('slug', $slug)->firstOrFail();
        $services = Service::where('status',1)->get();

        return view('front.service-details', compact('service','services'));
    }

    public function portfoliodetails($slug){
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

        return view('front.portfolio-details', compact('portfolio'));
    }

    public function portfolios(Request $request){
        $category = $request->category;

        $services = Service::where('status',1)->get();

        $portfolios = Portfolio::when($category , function($query , $category){
                                  return $query->where('service_id', $category);
                                })->orderBy('id','DESC')->paginate(6);

        return view('front.portfolios', compact('services','portfolios'));
    }

    public function blogdetails($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $latestblogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
        $bcategories = Bcategory::where('status', 1)->orderBy('id', 'DESC')->get();
        
        return view('front.blogdetails', compact('blog', 'bcategories', 'latestblogs'));
    }

    public function blogs(Request $request){
        $category = $request->category;

        $term = $request->term;

        $bcategories = Bcategory::where('status', 1)->orderBy('id', 'DESC')->get();

        $latestblogs = Blog::where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();

        $blogs = Blog::where('status', 1)
                            ->when($category, function ($query, $category) {
                                return $query->where('bcategory_id', $category);
                            })
                            ->when($term, function ($query, $term) {
                                return $query->where('title', 'like', '%'.$term.'%');
                            })
                            ->orderBy('id', 'DESC')->paginate(6);

        return view('front.blogs', compact('bcategories','latestblogs','blogs'));
    }
}
