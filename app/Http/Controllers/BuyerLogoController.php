<?php

namespace App\Http\Controllers;

use App\Models\BuyerLogo;
use Illuminate\Http\Request;
use App\Http\Requests\BuyerLogoRequest;
use Exception;
use Toastr;

class BuyerLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BuyerLogo::all();
        return view('backend.settings.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = BuyerLogo::all();
        return view('backend.settings.create', compact('data'));
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
     * Display the specified resource.
     */
    public function show(BuyerLogo $buyerLogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        return view('backend.settings.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BuyerLogoRequest $request,  $id)
    { 
        try{
        $data->buyer_name=$request->buyer_name;
         if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/ship'), $imageName);
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
    public function destroy( $id)
    {
        $data= BuyerLogo::findOrFail(encryptor('decrypt', $id));
        if($data->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
        }
    }
}
