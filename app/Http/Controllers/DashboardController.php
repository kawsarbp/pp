<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /*blog*/
    public function addBlog()
    {
        return view('backend.blog.add-blog');
    }

    public function manageBlog()
    {
        return view('backend.blog.manage-blog');
    }
    /*blog*/


}
