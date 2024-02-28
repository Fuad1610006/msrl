<?php

namespace App\Http\Controllers;

use App\Models\Ship;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\Request\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('backend.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gallery = Gallery::all();
         return view('backend.gallery.create', compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        try{
        $gallery=new Gallery;
        $gallery->name=$request->name;
        $gallery->image = $request->country;
        $gallery->category = $request->weight;
        $gallery->ship_id = $request->ship_id;
        if( $gallery->save()){
             $this->notice::success('Successfully saved');
             return redirect()->route('backend.gallery.index');
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
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
       try{
        $gallery->name=$request->name;
        $gallery->image = $request->country;
        $gallery->category = $request->weight;
        $gallery->ship_id = $request->ship_id;
        if( $gallery->save()){
             $this->notice::success('Successfully Updated');
             return redirect()->route('backend.gallery.index');
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
        $gallery= Gallery::findOrFail(encryptor('decrypt', $id));
        if($gallery->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back(); 
        }
    }

     /**
     * Display data dynamically into frontend.gallery.gallery.
     */
    public function gallery()
    {
        $ships = Ship::all(); // Fetch data from the Gallery model
        return view('frontend.gallery.gallery', compact('ships'));
    }

    /**
     * Display the gallery with filtered ships.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        // Retrieve the category query parameter from the request
        $category = $request->query('category');

        // Query the ships based on the selected category
        if ($category === 'corporate') {
            $ships = Ship::where('category', 'corporate')->get();
        } elseif ($category === 'project') {
            $ships = Ship::where('category', 'project')->get();
        } else {
            $ships = Ship::all(); // Display all ships if no specific category is selected
        }

        return view('frontend.gallery.gallery', compact('ships'));
    }
}
