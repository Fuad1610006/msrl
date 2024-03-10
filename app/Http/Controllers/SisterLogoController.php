<?php

namespace App\Http\Controllers;

use App\Models\SisterLogo;
use Illuminate\Http\Request;
use App\Http\Requests\SisterLogo\AddNewRequest;
use App\Http\Requests\SisterLogo\UpdateRequest;
use Exception;
use Toastr;

class SisterLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SisterLogo::all();
        return view('backend.sisterLogo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = SisterLogo::all();
        return view('backend.sisterLogo.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try{
        $data=new SisterLogo;
        $data->company_name=$request->company_name;
         if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/sisterLogo'), $imageName);
                $data->image = $imageName;
            }
        if( $data->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('sister-logo.index');
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
    public function show(SisterLogo $sisterLogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $data = SisterLogo::findOrFail(encryptor('decrypt', $id));
        return view('backend.sisterLogo.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        try{
          $data = SisterLogo::findOrFail(encryptor('decrypt', $id));
          $data->company_name = $request->company_name;

         if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/sisterLogo'), $imageName);
                $data->image = $imageName;
            }
        if( $data->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('sister-logo.index');
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
        $data= SisterLogo::findOrFail(encryptor('decrypt', $id));
        if($data->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
        }
    }
}
