<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\FrontMenuController;
use App\Http\Controllers\SisterConcernController;
use App\Models\Page;
use App\Models\BuyerLogo;
use App\Models\TrackRecord;
use App\Models\SisterLogo;
use App\Models\CompanyInfo;
use App\Models\Management;
use App\Models\TopManagement;
use App\Models\MidManagement;
use App\Models\YardManagement;
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
        $menus = FrontMenu::orderBy('rank')->get();
        $page_data= Page::where('page_slug',$slug)->where('published',1)->first();
        return view('frontend.page.index',compact('page_data','menus'));
    }

    //  public function menu()
    // {
    //     $menus = FrontMenu::orderBy('rank')->get();
    //     return view('frontend.home', compact('menus'));
    // }

    public function index()
    {
        $buyerLogos= BuyerLogo::all();
        $card= TrackRecord::first();
        $sister= SisterLogo::all();
        $menus = FrontMenu::orderBy('rank')->get();
        $info = CompanyInfo::first();
        return view('frontend.home', compact('menus', 'info','sister','card','buyerLogos'));
    }


    public function sister()
    {
        $sister = SisterConcern::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.sister-concern.sister', compact('menus'));
    }

    public function management()
    {
        $topM = TopManagement::all();
        $midM = MidManagement::all();
        $yardM = YardManagement::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.management.management', compact('menus','topM','midM','yardM'));
    }

}
