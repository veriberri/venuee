<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }
    
    public function about()
    {
        return 'about';
        //return view('about');
    }
    
    public function login()
    {
        return view('pages/login');
    }
    
    public function registerCompany()
    {
        return view('pages/registerCompany');
    }
    
    public function createEvent()
    {
        return view('pages/createEvent');
    }
    
    public function subscribe()
    {
        return view('pages/subscribe');
    }
}
