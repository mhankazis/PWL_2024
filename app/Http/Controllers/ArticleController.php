<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //index
    public function index($id)
    {
        return 'Halaman artikel dengan ID ' . $id;
    }
}
