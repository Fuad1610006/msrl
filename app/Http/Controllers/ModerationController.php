<?php

namespace App\Http\Controllers;

use App\Models\Moderation;
use Illuminate\Http\Request;

class ModerationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $moderation = Moderation::firstOrFail();
        return view('backend.moderation.index', compact('moderation'));
    }

    public function edit()
    {
        $moderation = Moderation::firstOrNew();
        return view('backend.moderation.edit', compact('moderation'));
    }

    public function update(Request $request, $id)
    {
        $moderation = Moderation::firstOrNew();
        $moderation->introduction = $request->input('introduction');
        $moderation->necessity = $request->input('necessity');
        $moderation->save();

        return redirect()->route('moderations.edit')->with('success', 'Paragraphs updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moderation $moderation)
    {
        //
    }
}
