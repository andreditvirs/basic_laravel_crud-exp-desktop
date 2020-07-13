<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $subtitle = "Sub Title";
        // return View('index', compact('subtitle')); // Bisa menggunakan ini
        $data = array(
            'subtitle' => 'Home Page',
            'desc' => ['Web Design', 'Code', 'Developer']
        );
        // return View('index')->with('subtitle', $subtitle); // Bisa menggunakan ini
        return View('index')->with($data);
    }
}
