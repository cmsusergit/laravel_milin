<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class PostController extends Controller
{
    public function index()
    {
        $postlist=post::orderBy("postdate","DESC")->get();
        return view("welcome",compact("postlist"));
    }
}
