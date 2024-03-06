<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Frontend;
use Exception;
use Toastr;

class FrontendController extends Controller
{
    /* get daynamic page */
    public function page($slug)
    {
        $page_data= Page::where('page_slug',"$slug")->where('published',1)->first();
        return view('frontend.Page.index',compact('page_data'));
    }

}
