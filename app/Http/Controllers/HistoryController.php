<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Requests\HistoryRequest;
use Exception;
use Toastr;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = History::all();
        return view('backend.history.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = History::all();
        return view('backend.history.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HistoryRequest $request)
    {
        try{
        $data=new History;
        $data->history_text=$request->history_text;
        if( $data->save()){
             $this->notice::success('Successfully Updated');
             return redirect()->route('history.index');
       
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
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
       $data = History::all();
        return view('backend.history.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HistoryRequest $request,  $id)
    {
        try{
        $data->history_text=$request->history_text;
        if( $data->save()){
             $this->notice::success('Successfully Updated');
             return redirect()->route('history.index');
       
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
        $data= History::findOrFail(encryptor('decrypt', $id));
        if($data->delete()){
              $this->notice::warning('Deleted Permanently!');
              return redirect()->back();
        }
    }
}
