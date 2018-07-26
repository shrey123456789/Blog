<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function view()
    {
        return "view Article";
    }

    public function post(Request $r)
    {
        return $r;
    }
}
