<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'activities' => Activity::all()
        ];

        return view('activity.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activity.create');
    }

    /**
     * Save a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:1|max:50',
            'description' => 'nullable|string|min:0',
            'percentage' => 'required|numeric|gte:0|lte:100',
            'score' => 'nullable|numeric|gte:0|lte:5'
        ]);

        Activity::create($request->only(['title', 'description', 'percentage', 'score']));
        return back()->with('message', 'Actividad creada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'activity' => Activity::findOrFail($id)
        ];

        return view('activity.show')->with("data", $data);
    }

    /**
     * Delete the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Activity::destroy($id);
        return redirect('/');
    }
}
