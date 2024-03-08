<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Sister;
use App\Models\Page;
use App\Models\Ship;
use App\Models\Text;
use App\Models\Mission;
use App\Models\History;
use App\Models\BuyerLogo;
use App\Models\TrackRecord;
use App\Models\SisterLogo;
use App\Models\CompanyInfo;
use App\Models\Chairman;
use App\Models\Overview;
use App\Models\Moderation;
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
        $chairman = Chairman::first();
        $about= AboutUs::first();
        $ship= Ship::latest()->get();
        $carousel= Carousel::all();
        $buyerLogos= BuyerLogo::all();
        $card = TrackRecord::first();
        $sister= SisterLogo::all();
        $menus = FrontMenu::orderBy('rank')->get();
        $info = CompanyInfo::first();
        return view('frontend.home', compact('menus', 'info','sister','card','buyerLogos','carousel','ship','about','chairman'));
    }


    public function sister()
    {
        $text= Text::first();
        $sis=Sister::first();
        $buyerLogos= BuyerLogo::all();
        $card = TrackRecord::first();
        $sisLogo= SisterLogo::all();
        $info = CompanyInfo::first();
        $sister = SisterConcern::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.sister-concern.sister', compact('menus','info','sister','sisLogo','card','buyerLogos','sis','text'));
    }

    public function management()
    {
        $management= Management::first();
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $topM = TopManagement::all();
        $midM = MidManagement::all();
        $yardM = YardManagement::all();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.management.management', compact('menus','topM','midM','yardM','info','sister','management'));
    }

    public function trackRecord()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $card= TrackRecord::first();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.track-record.track', compact('menus','card','info','sister'));
    }

     public function overview()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $over = Overview::first();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.overview.overview', compact('menus','over','info','sister'));
    }

     public function moderation()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $moderation = Moderation::first();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.moderation.moderation', compact('menus','moderation','info','sister'));
    }

      public function chairman()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $chairman = Chairman::first();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.chairman.chairman', compact('menus','chairman','info','sister'));
    }

     public function about()
    {
        $text= Text::first();
        $history= History::first();
        $mission= Mission::first();
        $buyerLogos= BuyerLogo::all();
        $card = TrackRecord::first();
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $about = AboutUs::first();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.about.about', compact('menus','about','info','sister','card','buyerLogos','mission','history','text'));
    }

    public function contact()
    {
        $sister= SisterLogo::all();
        $info = CompanyInfo::first();
        $menus = FrontMenu::orderBy('rank')->get();
        return view('frontend.contact.contact', compact('menus','info','sister'));
    }

}
