<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index()
    {
    	return view('frontend.pages.index');
    }

    function about()
    {
    	return view('frontend.pages.about');
    }

    function causes()
    {
    	return view('frontend.pages.causes');
    }

    function donate()
    {
    	return view('frontend.pages.donate');
    }

    function blog()
    {
    	return view('frontend.pages.blog');
    }

    function gallery()
    {
    	return view('frontend.pages.gallery');
    }

    function events()
    {
    	return view('frontend.pages.events');
    }

    function contacts()
    {
    	return view('frontend.pages.contacts');
    }

    function success()
    {
        return view('frontend.pages.success');
    }

    function failure()
    {
        return view('frontend.pages.failure');
    }
}
