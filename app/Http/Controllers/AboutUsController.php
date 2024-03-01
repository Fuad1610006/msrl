<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Requests\AboutUsRequest;
use Exception;
use Toastr;

class AboutUsController extends Controller
{
     public function upload(AboutUsRequest $request)
    {
        if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' .
                    $request->image->extension();
                $request->image->move(public_path('uploads/aboutUs'), $imageName);
                $data->image = $imageName;
            }
            $data->save();
            $this->notice::success('Successfully Uploaded');

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AboutUs::all();
        return view('backend.about-us.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = AboutUs::all();
        return view('backend.about-us.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutUsRequest $request)
    {
        try{
        $data=new AboutUs;
        $about->about_us_text=$request->about_us_text;
        if( $about->save()){
             $this->notice::success('Successfully Updated');
             return redirect()->route('about-us.index');
       
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
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUsRequest $request,  $id)
    {
        try{
        $data->about_us_text=$request->about_us_text;
        if( $about->save()){
             $this->notice::success('Successfully Updated');
             return redirect()->route('about-us.index');
       
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
        $data= AboutUs::findOrFail(encryptor('decrypt', $id));
        if($ship->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
        }
    }
}
