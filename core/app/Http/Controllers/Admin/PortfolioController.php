<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use App\PortfolioImage;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
        public function  portfolio(){
        $portfolios = Portfolio::orderBy('id','DESC')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function addPortfolio(){
        $services = Service::where('status','1')->get();
         return view('admin.portfolio.add',compact('services'));
    }

    public function storePortfolio(Request $request){

        $slug = Str::slug($request->title,'-');
        $portfolios = Portfolio::select('slug')->get();

        $request->validate([

            "featured_image" => "required|mimes:jpg,jpeg,png",
            "title"  => [
                'required',
                'max:255',
                function($attribute ,$value ,$fail) use ($slug , $portfolios){
                    foreach($portfolios as $portfolio){
                        if($portfolio->slug == $slug){
                           return $fail("Title Already Exist!");
                        }
                    }
                }],
            "client_name" => "required|max:100",
            "start_date" => "required",
            "submission_date" => "required",
            "service_id" =>"required",
            "content" => "required",
            "status" => "required",

        ]);

        $portfolio = new Portfolio();
        if($request->hasFile('featured_image')){

            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = "portfolio_".time().rand().'.'.$extension;
            $file->move('assets/front/img/',$featured_image);

            $portfolio->featured_image = $featured_image;
        }

        $portfolio->title = $request->title;
        $portfolio->client_name = $request->client_name;
        $portfolio->start_date = $request->start_date;
        $portfolio->service_id = $request->service_id;
        $portfolio->submission_date = $request->submission_date;
        $portfolio->slug = $slug;
        $portfolio->content = $request->content;
        $portfolio->status = $request->status;
        $portfolio->save();

        $portfolioId = Portfolio::orderBy('id','DESC')->first();
        if($request->hasFile('image')){
            $files = $request->file('image');
            $count = 1;
             foreach($files as $file){
                 $extension = $file->getClientOriginalExtension();
                 $image = "portfolio_".$count.time().rand().'.'.$extension;
                 $file->move('assets/front/img/',$image);
                 $portfolioImage = new PortfolioImage();
                 $portfolioImage->image = $image;
                 $portfolioImage->portfolio_id = $portfolioId->id;
                 $portfolioImage->save();
                 $count++;
             }
        }

        $notification = array(
            'messege' => 'Portfolio Added Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.portfolio'))->with('notification', $notification);
    }

    public function editPortfolio($id){

        $portfolio = Portfolio::findOrFail($id);
        $services = Service::where('status','1')->get();
        $portfolioImages = PortfolioImage::where('portfolio_id',$id)->get();

        return view('admin.portfolio.edit', compact('portfolio','services','portfolioImages'));
    }

    public function updatePortfolio(Request $request,$id){
        $slug = Str::slug($request->title,'-');
        $portfolios = Portfolio::select('slug')->get();
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([

            "featured_image" => "mimes:jpg,jpeg,png",
            "title"  => [
                'required',
                'max:255',
                function($attribute ,$value ,$fail) use ($slug , $portfolios ,$portfolio){
                    foreach($portfolios as $port){
                        if($portfolio->slug != $slug){
                            if($port->slug == $slug){
                                 return $fail("Title Already Exist!");
                            }
                        }
                    }
                }],
            "client_name" => "required|max:100",
            "start_date" => "required",
            "submission_date" => "required",
            "service_id" =>"required",
            "content" => "required",
            "status" => "required",

        ]);

        if($request->hasFile('featured_image')){
            @unlink('assets/front/img/',$portfolio->featured_image);

            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = "portfolio_".time().rand().'.'.$extension;
            $file->move('assets/front/img/',$featured_image);

            $portfolio->featured_image = $featured_image;
        }

        $portfolio->title = $request->title;
        $portfolio->client_name = $request->client_name;
        $portfolio->start_date = $request->start_date;
        $portfolio->service_id = $request->service_id;
        $portfolio->submission_date = $request->submission_date;
        $portfolio->slug = $slug;
        $portfolio->content = $request->content;
        $portfolio->status = $request->status;
        $portfolio->save();


        if($request->hasFile('image')){
            $files = $request->file('image');
            $count = 1;
             foreach($files as $file){
                 $extension = $file->getClientOriginalExtension();
                 $image = "portfolio_".$count.time().rand().'.'.$extension;
                 $file->move('assets/front/img/',$image);
                 $portfolioImage = new PortfolioImage();
                 $portfolioImage->image = $image;
                 $portfolioImage->portfolio_id = $id;
                 $portfolioImage->save();
                 $count++;
             }
        }

        $notification = array(
            'messege' => 'Portfolio Updated Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.portfolio'))->with('notification', $notification);

    }

    public function deletePortfolioImage($id){

        $portfolioImage = PortfolioImage::findOrFail($id);
        @unlink('assets/front/img/'.$portfolioImage->image);

        $portfolioImage->delete();

        $notification = array(
            'messege' => 'Portfolio Images Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect()->back()->with('notification', $notification);
    }

    public function deletePortfolio($id){

        $portfolioImages = PortfolioImage::where('portfolio_id',$id)->get();

        foreach($portfolioImages as $portfolioImage){
            @unlink('assets/front/img/'.$portfolioImage->image);
            $portfolioImage->delete();
        }

        $portfolio = Portfolio::findOrFail($id);
        @unlink('assets/front/img/'.$portfolio->featured_image);
        $portfolio->delete();


        $notification = array(
            'messege' => 'Portfolio Deleted Successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.portfolio'))->with('notification', $notification);
    }
}
