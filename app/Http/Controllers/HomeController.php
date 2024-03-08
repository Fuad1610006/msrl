<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Page;
use App\Models\Ship;
use App\Models\BuyerLogo;
use App\Models\TrackRecord;
use App\Models\SisterLogo;
use App\Models\CompanyInfo;
use App\Models\Chairman;
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
        $about= AboutUs::first();
        $ship= Ship::latest()->get();
        $carousel= Carousel::all();
        $buyerLogos= BuyerLogo::all();
        $card= TrackRecord::first();
        $sister= SisterLogo::all();
        $menus = FrontMenu::orderBy('rank')->get();
        $info = CompanyInfo::first();
        return view('frontend.home', compact('menus', 'info','sister','card','buyerLogos','carousel','ship','about'));
    }


    public function sister()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $sister = SisterConcern::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.sister-concern.sister', compact('menus','info','sister'));
    }

    public function management()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $topM = TopManagement::all();
        $midM = MidManagement::all();
        $yardM = YardManagement::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.management.management', compact('menus','topM','midM','yardM','info','sister'));
    }

    public function trackRecord()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $track = TrackRecord::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.track-record.track', compact('menus','track','info','sister'));
    }

     public function overview()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $over = Overview::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.overview.overview', compact('menus','over','info','sister'));
    }

     public function moderation()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $moderation = Moderation::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.moderation.moderation', compact('menus','moderation','info','sister'));
    }

      public function chairman()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $chairman = Moderation::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.chairman.chairman', compact('menus','chairman','info','sister'));
    }

     public function about()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $about = AboutUs::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.about.about', compact('menus','about','info','sister'));
    }

    public function contact()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $contact = Contact::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.contact.contact', compact('menus','contact','info','sister'));
    }

}
