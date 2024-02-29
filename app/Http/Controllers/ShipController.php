<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use Illuminate\Http\Request;
use App\Http\Requests\Ship\AddNewRequest;
use App\Http\Requests\Ship\UpdateRequest;
use Exception;
use Toastr;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ship = Ship::all();
        return view('backend.ship.index', compact('ship'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $ship = Ship::all();
         return view('backend.ship.create', compact('ship'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
        $ship=new Ship;
        $ship->name=$request->name;
        $ship->country = $request->country;
        $ship->weight = $request->weight;
        $ship->type = $request->type;
        $ship->status = $request->status;
         if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/ship'), $imageName);
                $ship->image = $imageName;
            }
        if( $ship->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('track-records.index');
       
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
    public function show(Ship $ship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       return view('backend.ship.edit', compact('ship'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
      try{
        $ship->name=$request->name;
        $ship->country = $request->country;
        $ship->weight = $request->weight;
        $ship->type = $request->type;
        $ship->status = $request->status;
         if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/ship'), $imageName);
                $ship->image = $imageName;
            }
        if( $ship->save()){
             $this->notice::success('Successfully Updated');
             return redirect()->route('track-records.index');
       
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
    public function destroy($id)
    {
        $ship= Ship::findOrFail(encryptor('decrypt', $id));
        if($ship->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
          
        }
    }
}
