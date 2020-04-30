<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return "Ini adalah index page book";
    }

    public function viewJudul($judul){
        $data=array(
            'judul' =>$judul
        );
        return View('Book', $data); //View::make() pada laravel 5.1.4
    }
}
