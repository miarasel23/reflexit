<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
    public function aboutUs()
    {
        return view('frontend.pages.about_us');
    }
    public function contactUs()
    {
        return view('frontend.pages.contact_us');
    }
    public function softwareDevelopment()
    {
        return view('frontend.pages.software_development');
    }
    public function services()
    {
        return view('frontend.pages.services');
    }
    public function webDevelopment()
    {
        return view('frontend.pages.web_development');
    }
    public function mobileApplicationDevelopment()
    {
        return view('frontend.pages.mobile_application_development');
    }
    public function cloudAndDevOps()
    {
        return view('frontend.pages.cloud_and_devops');
    }
    public function productDesign()
    {
        return view('frontend.pages.product_design');
    }
    public function erp()
    {
        return view('frontend.pages.erp');
    }
    public function e_commerce()
    {
        return view('frontend.pages.e_commerce');
    }
    public function blog()
    {
        return view('frontend.pages.blog');
    }
}
