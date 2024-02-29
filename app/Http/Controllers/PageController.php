<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //index
    public function index() {
        return 'Selamat Datang';
    }

    //about
    public function about() {
        return 'Malik Abdul Azis 2241720240';
    }

    //articles
    public function articles($id) {
        return 'Halaman artikel dengan ID '.$id;
    }
}
