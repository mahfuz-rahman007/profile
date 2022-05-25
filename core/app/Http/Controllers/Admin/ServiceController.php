<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use App\PortfolioImage;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function service(){
        $services = Service::orderBy('id','DESC')->get();
        return view('admin.service.index', compact('services'));
    }

    public function addService(){
         return view('admin.service.add');
    }

    public function storeService(Request $request){
         $slug = Str::slug($request->name,'-');
         $services = Service::select('slug')->get();

        $request->validate([

            "image" => "required|mimes:jpg,jpeg,png",
            "featured_image" => "mimes:jpg,jpeg,png",
            "name"  => [
                'required',
                'max:255',
                function($attribute ,$value ,$fail) use ($slug , $services){
                    foreach($services as $service){
                        if($service->slug == $slug){
                           return $fail("Name Already Exist!");
                        }
                    }
                }],
            "description" => "required|max:250",
            "content" => "required",
            "status" => "required",

        ]);

        $service = new Service();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = time().rand().'.'.$extension;
            $file->move('assets/front/img/',$image);

            $service->image = $image;
        }

        if($request->hasFile('featured_image')){
            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();
            $featured_image = time().rand().'.'.$extension;
            $file->move('assets/front/img/',$featured_image);

            $service->featured_image = $featured_image;
        }

        $service->name = $request->name;
        $service->slug = $slug;
        $service->description = $request->description;
        $service->content = $request->content;
        $service->status = $request->status;
        $service->save();

        $notification = array(
            'messege' => 'Service Added Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.service'))->with('notification', $notification);

    }

    public function editService($id){
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    public function updateService(Request $request,$id){
        $slug = Str::slug($request->name,'-');
        $services = Service::select('slug')->get();
        $service = Service::findOrFail($id);

       $request->validate([

           "image" => "mimes:jpg,jpeg,png",
           "featured_image" => "mimes:jpg,jpeg,png",
           "name"  => [
               'required',
               'max:255',
               function($attribute ,$value ,$fail) use ($slug , $services ,$service){
                   foreach($services as $ser){
                       if($service->slug != $slug){
                           if($ser->slug == $slug){
                                return $fail("Name Already Exist!");
                           }
                       }
                   }
               }],
           "description" => "required|max:250",
           "content" => "required",
           "status" => "required",

       ]);

       if($request->hasFile('image')){
           @unlink('assets/front/img/'.$service->image);

           $file = $request->file('image');
           $extension = $file->getClientOriginalExtension();
           $image = time().rand().'.'.$extension;
           $file->move('assets/front/img/',$image);

           $service->image = $image;
       }

       if($request->hasFile('featured_image')){
           @unlink('assets/front/img/'.$service->featured_image);

           $file = $request->file('featured_image');
           $extension = $file->getClientOriginalExtension();
           $featured_image = time().rand().'.'.$extension;
           $file->move('assets/front/img/',$featured_image);

           $service->featured_image = $featured_image;
       }

       $service->name = $request->name;
       $service->slug = $slug;
       $service->description = $request->description;
       $service->content = $request->content;
       $service->status = $request->status;
       $service->save();

       $notification = array(
        'messege' => 'Service Updated Successfully',
        'alert'   => 'success'
        );

        return redirect(route('admin.service'))->with('notification', $notification);

    }

    public function deleteService($id){



        $service = Service::findOrFail($id);

        // $portfolios = Portfolio::where('service_id',$id)->get();

        // foreach($portfolios as $portfolio){
        //     $portfolio_id = $portfolio->id;

        //     $portfolioImages = PortfolioImage::where('portfolio_id',$portfolio_id)->get();

        //     foreach($portfolioImages as $portfolioImage){
        //         @unlink('assets/front/img/'.$portfolioImage->image);
        //         $portfolioImage->delete();
        //     }

        //     @unlink('assets/front/img/'.$portfolio->featured_image);
        //     $portfolio->delete();

        // }

        @unlink('assets/front/img/'.$service->image);
        @unlink('assets/front/img/'.$service->featured_image);
        $service->delete();

        $notification = array(
            'messege' => 'Service Deleted Successfully',
            'alert'   => 'success'
        );

        return redirect(route('admin.service'))->with('notification', $notification);
    }
}
