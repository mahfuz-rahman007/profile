<?php

namespace App\Providers;

use App\About;
use App\Admin;
use App\Sectiontitle;
use App\Setting;
use App\Social;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $adminProfile = Admin::first();
        $setting = Setting::first();
        $sectiontitle = Sectiontitle::first();
        $about = About::first();
        $socials = Social::all();



        View::share('adminProfile', $adminProfile);
        View::share('setting', $setting);
        View::share('sectiontitle', $sectiontitle);
        View::share('about', $about);
        View::share('socials', $socials);




    }
}
