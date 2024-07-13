<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'footer' => true
        ];
        return view('index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'footer' => true
        ];
        return view('about', $data);
    }

    public function services()
    {
        $data = [
            'title' => 'Services',
            'footer' => true
        ];
        return view('services', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog',
            'footer' => true
        ];
        return view('blog', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'footer' => true
        ];
        return view('contact', $data);
    }
}
