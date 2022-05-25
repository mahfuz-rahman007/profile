<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Sectiontitle;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    //
    public function basicinfo(){

        return view('admin.settings.basicinfo');
    }

    public function update_basicinfo(Request $request){
        $request->validate([
            "base_color" => "required",
            "website_title" => "required",
            "fav_icon" => "mimes:jpg,jpeg,png",
            "breadcrumb_image" => "mimes:jpg,jpeg,png"
        ]);

        $basicsetting = Setting::first();

        if($request->hasFile('fav_icon')){
            @unlink('assets/front/img/'.$basicsetting->fav_icon);
            $file = $request->file('fav_icon');
            $extension = $file->getClientOriginalExtension();
            $fav_icon = 'fav_icon_'.time().rand().'.'.$extension;
            $file->move('assets/front/img/',$fav_icon);
            $basicsetting->fav_icon = $fav_icon;
        }

        if($request->hasFile('breadcrumb_image')){
            @unlink('assets/front/img/'.$basicsetting->breadcrumb_image);
            $file = $request->file('breadcrumb_image');

            $file->move('assets/front/img/','breadcrumb_image.jpg');

        }


        $basicsetting->website_title = $request->website_title;
        $basicsetting->contact_mail = $request->contact_mail;

        $color = preg_replace('/#/i','',$request->base_color);
        $basicsetting->base_color = $color;

        $basicsetting->save();

        $notification = array(
            'messege' => 'Basic Info Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.basicinfo'))->with('notification', $notification);

    }
    public function homeversion(){
        return view('admin.settings.homeversion');
    }

    public function update_homeversion(Request $request){
        $homeversion = Setting::first();
        $homeversion->home_version = $request->home_version;
        $homeversion->save();
        Session::flash('success',"Home Version ".$request->home_version." Updated Successfully");
        return redirect()->back();
    }

    public function sectiontitle(){
        return view('admin.settings.sectiontitle');
    }

    public function updateSectiontitle(Request $request){
        $request->validate([

            "about_title"           => "required|max:150",
            "about_subtitle"        => "required|max:300",
            "resume_title"          => "required|max:150",
            "resume_subtitle"       => "required|max:300",
            "skill_title"           => "required|max:150",
            "skill_subtitle"        => "required|max:300",
            "funfact_title"         => "required|max:150",
            "funfact_subtitle"      => "required|max:300",

            "experience_title"      => "required|max:150",
            "education_title"       => "required|max:150",
            "client_title"          => "required|max:150",

            "service_title"         => "required|max:150",
            "service_subtitle"      => "required|max:300",
            "portfolio_title"       => "required|max:150",
            "portfolio_subtitle"    => "required|max:300",
            "pricingplan_title"     => "required|max:150",
            "pricingplan_subtitle"  => "required|max:300",
            "blog_title"            => "required|max:150",
            "blog_subtitle"         => "required|max:300",
            "testimonial_title"     => "required|max:150",
            "testimonial_subtitle"  => "required|max:300",
            "contact_title"         => "required|max:150",
            "contact_subtitle"      => "required|max:300",

        ]);

        $sectiontitle = Sectiontitle::first();

        $sectiontitle->about_title = $request->about_title;
        $sectiontitle->about_subtitle = $request->about_subtitle;

        $sectiontitle->skill_title = $request->skill_title;
        $sectiontitle->skill_subtitle = $request->skill_subtitle;

        $sectiontitle->funfact_title = $request->funfact_title;
        $sectiontitle->funfact_subtitle = $request->funfact_subtitle;


        $sectiontitle->experience_title = $request->experience_title;
        $sectiontitle->education_title = $request->education_title;
        $sectiontitle->client_title = $request->client_title;

        $sectiontitle->service_title = $request->service_title;
        $sectiontitle->service_subtitle = $request->service_subtitle;

        $sectiontitle->portfolio_title = $request->portfolio_title;
        $sectiontitle->portfolio_subtitle = $request->portfolio_subtitle;

        $sectiontitle->resume_title = $request->resume_title;
        $sectiontitle->resume_subtitle = $request->resume_subtitle;

        $sectiontitle->pricingplan_title = $request->pricingplan_title;
        $sectiontitle->pricingplan_subtitle = $request->pricingplan_subtitle;

        $sectiontitle->blog_title = $request->blog_title;
        $sectiontitle->blog_subtitle = $request->blog_subtitle;

        $sectiontitle->testimonial_title = $request->testimonial_title;
        $sectiontitle->testimonial_subtitle = $request->testimonial_subtitle;

        $sectiontitle->contact_title = $request->contact_title;
        $sectiontitle->contact_subtitle = $request->contact_subtitle;

        $sectiontitle->save();

        $notification = array(
            'messege' => 'Section Titles & Subtitles Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.sectiontitle'))->with('notification', $notification);

    }

    public function scripts(){
        return view('admin.settings.scripts');
    }

    public function updateScripts(Request $request){
        $scripts = Setting::first();
        $scripts->tawk_to_api_key = $request->tawk_to_api_key;
        $scripts->disqus_username = $request->disqus_username;

        if($request->is_tawkto == 'on'){
            $scripts->is_tawkto = 1;
        }else{
            $scripts->is_tawkto = 0;
        }


        if($request->is_disqus == 'on'){
            $scripts->is_disqus = 1;
        }else{
            $scripts->is_disqus = 0;
        }

        $scripts->save();

        $notification = array(
            'messege' => 'Scripts Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.scripts'))->with('notification', $notification);

    }

    public function seoinfo(){
        return view('admin.settings.seoinfo');
    }

    public function updateSeoinfo(Request $request){
        $seoinfo = Setting::first();

        $seoinfo->meta_keywords    = $request->meta_keywords;
        $seoinfo->meta_description = $request->meta_description;
        $seoinfo->save();

        $notification = array(
            'messege' => 'Seo Information Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.seoinfo'))->with('notification', $notification);
    }

    public function pagevisibility(){
        return view('admin.settings.pagevisibility');
    }

    public function updatePagevisibility(Request $request){
        $pagevisibility = Setting::first();

        if($request->ishome == 'on'){
            $pagevisibility->ishome = 1;
        }else{
            $pagevisibility->ishome = 0;
        }

        if($request->isabout == 'on'){
            $pagevisibility->isabout = 1;
        }else{
            $pagevisibility->isabout = 0;
        }

        if($request->isfunfacts == 'on'){
            $pagevisibility->isfunfacts = 1;
        }else{
            $pagevisibility->isfunfacts = 0;
        }


        if($request->isservice == 'on'){
            $pagevisibility->isservice = 1;
        }else{
            $pagevisibility->isservice = 0;
        }

        if($request->isresume == 'on'){
            $pagevisibility->isresume = 1;
        }else{
            $pagevisibility->isresume = 0;
        }

        if($request->istestimonial == 'on'){
            $pagevisibility->istestimonial = 1;
        }else{
            $pagevisibility->istestimonial = 0;
        }

        if($request->isportfolio == 'on'){
            $pagevisibility->isportfolio = 1;
        }else{
            $pagevisibility->isportfolio = 0;
        }

        if($request->ispricingplan == 'on'){
            $pagevisibility->ispricingplan = 1;
        }else{
            $pagevisibility->ispricingplan = 0;
        }

        if($request->iscontact == 'on'){
            $pagevisibility->iscontact = 1;
        }else{
            $pagevisibility->iscontact = 0;
        }

        if($request->isclient == 'on'){
            $pagevisibility->isclient = 1;
        }else{
            $pagevisibility->isclient = 0;
        }


        if($request->is_resume_download == 'on'){
            $pagevisibility->is_resume_download = 1;
        }else{
            $pagevisibility->is_resume_download = 0;
        }

        if($request->is_home_social == 'on'){
            $pagevisibility->is_home_social = 1;
        }else{
            $pagevisibility->is_home_social = 0;
        }

        $pagevisibility->save();

        $notification = array(
            'messege' => 'Page Visibility Updated successfully!',
            'alert' => 'success'
        );
        return redirect(route('admin.pagevisibility'))->with('notification', $notification);
    }

}
