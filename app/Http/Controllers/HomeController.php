<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FrontMenuController;
use App\Http\Controllers\SisterConcernController;
use App\Models\Page;
use App\Models\Carousel;
use App\Models\FrontMenu;
use App\Models\SisterConcern;
use Exception;
use Toastr;

class HomeController extends Controller
{
    // public function carousel()
    // {
    //     $data = Carousel::all(); 
    //     return view('frontend.home', compact('data'));
    // }

    /* get daynamic page */
    public function page($slug)
    {
        $page_data= Page::where('page_slug',"$slug")->where('published',1)->first();
        return view('frontend.page.index',compact('page_data'));
    }

    //  public function menu()
    // {
    //     $menus = FrontMenu::orderBy('rank')->get();
    //     return view('frontend.home', compact('menus'));
    // }

    public function index()
    {
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.home', compact('menus')); 
    }

    public function sister()
    {
        $sister = SisterConcern::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.sister-concern.sister', compact('menus')); 
    }

    public function management()
    {
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.management.management', compact('menus')); 
    }

}
