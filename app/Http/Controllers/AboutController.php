<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use Exception;
use Toastr;

class AboutController extends Controller
{
   /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $about = About::all();
        return view('backend.about.create', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutRequest $request)
    {
        try{
        $about=new About;
        $about->about_text=$request->about_text;
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
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('backend.about.index', compact('about'));
    }

   public function edit($id)
    {
        // Fetch the specific about record based on the $id
        $about = About::find($id);

        // Check if the about record exists
        if (!$about) {
            // Handle the case where the record doesn't exist, maybe redirect back with a message
            $this->notice::error('Please try again!');
            return redirect()->back()->withInput();
        }

        // Pass the single about record to the view
        return view('backend.about.edit', compact('about'));
    }


    public function update(AboutRequest $request, $id)
    {
         try{

         $about->about_text=$request->about_text;

         $about->save();
            $this->notice::success('Successfully saved');
            return redirect()->route('about-us.index');
           
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
        $about= About::findOrFail(encryptor('decrypt', $id));
        if($about->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
        }
    }

    public function about()
    {
        // Fetch about texts from the database
        $about = About::all();
        
        // Pass about data to the view
        return view('frontend.about.about', compact('about'));
    }
}
