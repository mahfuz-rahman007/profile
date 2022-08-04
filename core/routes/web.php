<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Front Routes Start
Route::get('/' , 'Front\FrontController@index')->name('front.index');
Route::get('/service-details/{slug}' , 'Front\FrontController@servicedetails')->name('front.servicedetails');
Route::get('/portfolios' , 'Front\FrontController@portfolios')->name('front.portfolios');
Route::get('/portfolio-details/{slug}' , 'Front\FrontController@portfoliodetails')->name('front.portfoliodetails');
Route::get('/blogs' , 'Front\FrontController@blogs')->name('front.blogs');
Route::get('/blog-details/{slug}' , 'Front\FrontController@blogdetails')->name('front.blogdetails');
// Front Routes End


Route::group(['prefix'=>'admin' , 'middleware'=>'guest:admin'] ,function(){

    Route::get('/' , 'Admin\LoginController@login')->name('admin.login');
    Route::post('/login' , 'Admin\LoginController@authenticate')->name('admin.auth');

});

Route::group(['prefix'=>'admin' , 'middleware'=>'auth:admin'] ,function(){

    Route::get('/logout' , 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/dashboard' , 'Admin\DashboardController@dashboard')->name('admin.dashboard');

    // Profile Update Routes
    Route::get('/profile/edit' , 'Admin\ProfileController@editProfile')->name('admin.editProfile');
    Route::post('/profile/update' , 'Admin\ProfileController@updateProfile')->name('admin.updateProfile');
    Route::get('/profile/password/edit' , 'Admin\ProfileController@editPassword')->name('admin.editPassword');
    Route::post('/profile/password/update' , 'Admin\ProfileController@updatePassword')->name('admin.updatePassword');


    // Basicinfo Routes
    Route::get('/basicinfo' , 'Admin\SettingController@basicinfo')->name('admin.basicinfo');
    Route::post('/basicinfo/update' , 'Admin\SettingController@update_basicinfo')->name('admin.update_basicinfo');

    //Section Title
    Route::get('/sectiontitle' , 'Admin\SettingController@sectiontitle')->name('admin.sectiontitle');
    Route::post('/sectiontitle/update' , 'Admin\SettingController@updateSectiontitle')->name('admin.updateSectiontitle');

    // Social links Routes
    Route::get('/slinks' , 'Admin\SocialController@slinks')->name('admin.slinks');
    Route::post('/slinks/store' , 'Admin\SocialController@storeSlinks')->name('admin.storeSlinks');
    Route::get('/slinks/edit/{id}/' , 'Admin\SocialController@editSlinks')->name('admin.editSlinks');
    Route::post('/slinks/update/{id}/' , 'Admin\SocialController@updateSlinks')->name('admin.updateSlinks');
    Route::post('/slinks/delete/{id}/' , 'Admin\SocialController@deleteSlinks')->name('admin.deleteSlinks');

    //Section Title
    Route::get('/scripts' , 'Admin\SettingController@scripts')->name('admin.scripts');
    Route::post('/scripts/update' , 'Admin\SettingController@updateScripts')->name('admin.updateScripts');

    //Seo  Information
    Route::get('/seoinfo' , 'Admin\SettingController@seoinfo')->name('admin.seoinfo');
    Route::post('/seoinfo/update' , 'Admin\SettingController@updateSeoinfo')->name('admin.updateSeoinfo');

    //Page Visibility
    Route::get('/pagevisibility' , 'Admin\SettingController@pagevisibility')->name('admin.pagevisibility');
    Route::post('/pagevisibility/update' , 'Admin\SettingController@updatePagevisibility')->name('admin.updatePagevisibility');

    //Hpme Route
    Route::get('/home' , 'Admin\HomeController@home')->name('admin.home');
    Route::post('/home/update' , 'Admin\HomeController@updateHome')->name('admin.updateHome');


    // About Route
    Route::get('/about' , 'Admin\AboutController@about')->name('admin.about');
    Route::post('/about/update' , 'Admin\AboutController@updateAbout')->name('admin.updateAbout');

    //Contact information Route
    Route::get('/about/contact-info' , 'Admin\AboutController@contactinfo')->name('admin.contactinfo');
    Route::post('/about/contact-info/update' , 'Admin\AboutController@updateContactinfo')->name('admin.updateContactinfo');

    // Funfacts Route
    Route::get('/about/funfact' , 'Admin\AboutController@funfact')->name('admin.funfact');
    Route::get('/about/funfact/add' , 'Admin\AboutController@addFunfact')->name('admin.addFunfact');
    Route::post('/about/funfact/store' , 'Admin\AboutController@storeFunfact')->name('admin.storeFunfact');
    Route::get('/about/funfact/edit/{id}/' , 'Admin\AboutController@editFunfact')->name('admin.editFunfact');
    Route::post('/about/funfact/update/{id}/' , 'Admin\AboutController@updateFunfact')->name('admin.updateFunfact');
    Route::post('/about/funfact/delete/{id}/' , 'Admin\AboutController@deleteFunfact')->name('admin.deleteFunfact');

    // Service Route
    Route::get('/service' , 'Admin\ServiceController@service')->name('admin.service');
    Route::get('/service/add' , 'Admin\ServiceController@addService')->name('admin.addService');
    Route::post('/service/store' , 'Admin\ServiceController@storeService')->name('admin.storeService');
    Route::get('/service/edit/{id}/' , 'Admin\ServiceController@editService')->name('admin.editService');
    Route::post('/service/update/{id}/' , 'Admin\ServiceController@updateService')->name('admin.updateService');
    Route::post('/service/delete/{id}/' , 'Admin\ServiceController@deleteService')->name('admin.deleteService');


    // Education Route
    Route::get('/education' , 'Admin\EducationController@education')->name('admin.education');
    Route::get('/education/add' , 'Admin\EducationController@addEducation')->name('admin.addEducation');
    Route::post('/education/store' , 'Admin\EducationController@storeEducation')->name('admin.storeEducation');
    Route::get('/education/edit/{id}/' , 'Admin\EducationController@editEducation')->name('admin.editEducation');
    Route::post('/education/update/{id}/' , 'Admin\EducationController@updateEducation')->name('admin.updateEducation');
    Route::post('/education/delete/{id}/' , 'Admin\EducationController@deleteEducation')->name('admin.deleteEducation');

    // Experience Route
    Route::get('/experience' , 'Admin\ExperienceController@experience')->name('admin.experience');
    Route::get('/experience/add' , 'Admin\ExperienceController@addExperience')->name('admin.addExperience');
    Route::post('/experience/store' , 'Admin\ExperienceController@storeExperience')->name('admin.storeExperience');
    Route::get('/experience/edit/{id}/' , 'Admin\ExperienceController@editExperience')->name('admin.editExperience');
    Route::post('/experience/update/{id}/' , 'Admin\ExperienceController@updateExperience')->name('admin.updateExperience');
    Route::post('/experience/delete/{id}/' , 'Admin\ExperienceController@deleteExperience')->name('admin.deleteExperience');

    // Skill Category Route
    Route::get('/skill/skill-category' , 'Admin\ScategoryController@scategory')->name('admin.scategory');
    Route::get('/skill/skill-category/add' , 'Admin\ScategoryController@addScategory')->name('admin.addScategory');
    Route::post('/skill/skill-category/store' , 'Admin\ScategoryController@storeScategory')->name('admin.storeScategory');
    Route::get('/skill/skill-category/edit/{id}/' , 'Admin\ScategoryController@editScategory')->name('admin.editScategory');
    Route::post('/skill/skill-category/update/{id}/' , 'Admin\ScategoryController@updateScategory')->name('admin.updateScategory');
    Route::post('/skill/skill-category/delete/{id}/' , 'Admin\ScategoryController@deleteScategory')->name('admin.deleteScategory');

    // Skill Route
    Route::get('/skill' , 'Admin\SkillController@skill')->name('admin.skill');
    Route::get('/skill/add' , 'Admin\SkillController@addSkill')->name('admin.addSkill');
    Route::post('/skill/store' , 'Admin\SkillController@storeSkill')->name('admin.storeSkill');
    Route::get('/skill/edit/{id}/' , 'Admin\SkillController@editSkill')->name('admin.editSkill');
    Route::post('/skill/update/{id}/' , 'Admin\SkillController@updateSkill')->name('admin.updateSkill');
    Route::post('/skill/delete/{id}/' , 'Admin\SkillController@deleteSkill')->name('admin.deleteSkill');

    // Pricing Plane Route
    Route::get('/pricing-plan' , 'Admin\PricingController@pricing')->name('admin.pricing');
    Route::get('/pricing-plan/add' , 'Admin\PricingController@addPricing')->name('admin.addPricing');
    Route::post('/pricing-plan/store' , 'Admin\PricingController@storePricing')->name('admin.storePricing');
    Route::get('/pricing-plan/edit/{id}/' , 'Admin\PricingController@editPricing')->name('admin.editPricing');
    Route::post('/pricing-plan/update/{id}/' , 'Admin\PricingController@updatePricing')->name('admin.updatePricing');
    Route::post('/pricing-plan/delete/{id}/' , 'Admin\PricingController@deletePricing')->name('admin.deletePricing');


    // Testimonial Route
    Route::get('/testimonial' , 'Admin\TestimonialController@testimonial')->name('admin.testimonial');
    Route::get('/testimonial/add' , 'Admin\TestimonialController@addTestimonial')->name('admin.addTestimonial');
    Route::post('/testimonial/store' , 'Admin\TestimonialController@storeTestimonial')->name('admin.storeTestimonial');
    Route::get('/testimonial/edit/{id}/' , 'Admin\TestimonialController@editTestimonial')->name('admin.editTestimonial');
    Route::post('/testimonial/update/{id}/' , 'Admin\TestimonialController@updateTestimonial')->name('admin.updateTestimonial');
    Route::post('/testimonial/delete/{id}/' , 'Admin\TestimonialController@deleteTestimonial')->name('admin.deleteTestimonial');

    // portfolio Route
    Route::get('/portfolio' , 'Admin\PortfolioController@portfolio')->name('admin.portfolio');
    Route::get('/portfolio/add' , 'Admin\PortfolioController@addPortfolio')->name('admin.addPortfolio');
    Route::post('/portfolio/store' , 'Admin\PortfolioController@storePortfolio')->name('admin.storePortfolio');
    Route::get('/portfolio/edit/{id}/' , 'Admin\PortfolioController@editPortfolio')->name('admin.editPortfolio');
    Route::post('/portfolio/update/{id}/' , 'Admin\PortfolioController@updatePortfolio')->name('admin.updatePortfolio');
    Route::post('/portfolio/delete/{id}/' , 'Admin\PortfolioController@deletePortfolio')->name('admin.deletePortfolio');
    Route::get('/portfolio/portfolioImage/delete/{id}/' , 'Admin\PortfolioController@deletePortfolioImage')->name('admin.deletePortfolioImage');


    // Testimonial Route
    Route::get('/blog/blog-category' , 'Admin\BcategoryController@bcategory')->name('admin.bcategory');
    Route::get('/blog/blog-category/add' , 'Admin\BcategoryController@addBcategory')->name('admin.addBcategory');
    Route::post('/blog/blog-category/store' , 'Admin\BcategoryController@storeBcategory')->name('admin.storeBcategory');
    Route::get('/blog/blog-category/edit/{id}/' , 'Admin\BcategoryController@editBcategory')->name('admin.editBcategory');
    Route::post('/blog/blog-category/update/{id}/' , 'Admin\BcategoryController@updateBcategory')->name('admin.updateBcategory');
    Route::post('/blog/blog-category/delete/{id}/' , 'Admin\BcategoryController@deleteBcategory')->name('admin.deleteBcategory');

    // Testimonial Route
    Route::get('/blog' , 'Admin\BlogController@blog')->name('admin.blog');
    Route::get('/blog/add' , 'Admin\BlogController@addBlog')->name('admin.addBlog');
    Route::post('/blog/store' , 'Admin\BlogController@storeBlog')->name('admin.storeBlog');
    Route::get('/blog/edit/{id}/' , 'Admin\BlogController@editBlog')->name('admin.editBlog');
    Route::post('/blog/update/{id}/' , 'Admin\BlogController@updateBlog')->name('admin.updateBlog');
    Route::post('/blog/delete/{id}/' , 'Admin\BlogController@deleteBlog')->name('admin.deleteBlog');

    // Client Route
    Route::get('/client' , 'Admin\ClientController@client')->name('admin.client');
    Route::get('/client/add' , 'Admin\ClientController@addClient')->name('admin.addClient');
    Route::post('/client/store' , 'Admin\ClientController@storeClient')->name('admin.storeClient');
    Route::get('/client/edit/{id}/' , 'Admin\ClientController@editClient')->name('admin.editClient');
    Route::post('/client/update/{id}/' , 'Admin\ClientController@updateClient')->name('admin.updateClient');
    Route::post('/client/delete/{id}/' , 'Admin\ClientController@deleteClient')->name('admin.deleteClient');

    // Footer Route
    Route::get('/footer' , 'Admin\FooterController@footer')->name('admin.footer');
    Route::post('/footer/update' , 'Admin\FooterController@updateFooter')->name('admin.updateFooter');

});
