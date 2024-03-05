<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\SettingsRequest;
use Exception;
use Toastr;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::all();
        return view('backend.settings.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SettingsRequest $request)
    {
        try{
        $setting = new Setting();
         // Save Sister Image
        if ($request->hasFile('sister_image')) {
            $sisterImageName = rand(111, 999) . time() . '.' .
                $request->sister_image->extension();
            $request->sister_image->move(public_path('uploads/sisterLogo'), $sisterImageName);
            $setting->sister_image = $sisterImageName;
        }

        // Save Buyer Image
        if ($request->hasFile('buyer_image')) {
            $buyerImageName = rand(111, 999) . time() . '.' .
                $request->buyer_image->extension();
            $request->buyer_image->move(public_path('uploads/buyerLogo'), $buyerImageName);
            $setting->buyer_image = $buyerImageName;
        }
        
         if ($request->hasFile('main_logo')) {
            $mainImageName = rand(111, 999) . time() . '.' .
                $request->main_logo->extension();
            $request->main_logo->move(public_path('uploads/mainLogo'), $mainImageName);
            $setting->main_logo = $mainImageName;
        }
       
        $setting->location = $request->location;
        $setting->email_address = $request->email_address;
        $setting->contact_no = $request->contact_no;
        $setting->sister_company_name = $request->sister_company_name;
        $setting->buyer_name = $request->buyer_name;

        if( $setting->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('backend.settings.index');
        }else{
            $this->notice::error('Please try again!');
            return redirect()->back()->withInput(); 
        }
        }catch(Exception $e){
            dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $setting = Setting::findOrFail(encryptor('decrypt',$id));
        return view('backend.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingsRequest $request,  $id)
    {
        try{
         // Save Sister Image
        if ($request->hasFile('sister_image')) {
            $sisterImageName = rand(111, 999) . time() . '.' .
                $request->sister_image->extension();
            $request->sister_image->move(public_path('uploads/sisterLogo'), $sisterImageName);
            $setting->sister_image = $sisterImageName;
        }

        // Save Buyer Image
        if ($request->hasFile('buyer_image')) {
            $buyerImageName = rand(111, 999) . time() . '.' .
                $request->buyer_image->extension();
            $request->buyer_image->move(public_path('uploads/buyerLogo'), $buyerImageName);
            $setting->buyer_image = $buyerImageName;
        }
        $setting->title_1 = $request->title_1;
        $setting->title_2 = $request->title_2;
        $setting->title_3 = $request->title_3;
        $setting->title_4 = $request->title_4;
        $setting->number_1 = $request->number_1;
        $setting->number_2 = $request->number_2;
        $setting->number_3 = $request->number_3;
        $setting->number_4 = $request->number_4;

        if( $setting->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('backend.settings.index');
        }else{
            $this->notice::error('Please try again!');
            return redirect()->back()->withInput(); 
        }
        }catch(Exception $e){
            dd($e);
             $this->notice::error('Please try again');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $setting= setting::findOrFail(encryptor('decrypt', $id));
        if($setting->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
        }
    }

}
