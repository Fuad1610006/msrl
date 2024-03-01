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
    public function store(Request $request)
    {
        try{
        $data=new BuyerLogo;
        $data->buyer_name=$request->buyer_name;
         if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/buyerLogo'), $imageName);
                $ship->image = $imageName;
            }
        if( $data->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('buyer.index');
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
    public function edit(Setting $setting)
    {
        return view('backend.settings.ceate', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        try{
        $data->buyer_name=$request->buyer_name;
         if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/buyerLogo'), $imageName);
                $ship->image = $imageName;
            }
        if( $data->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('buyer.index');
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
    public function destroy(Setting $setting)
    {
        $ship= Ship::findOrFail(encryptor('decrypt', $id));
        if($ship->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
        }
    }

}
