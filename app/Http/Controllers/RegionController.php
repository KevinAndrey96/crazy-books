<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Region;
use App\Models\Evidence;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $regions = Region::all();
        $books = Book::all();
        return view('regions.index',compact('regions', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();

        return view('regions.create',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $region = Region::create($request->all());
        return redirect()->route('regions.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */


   /* public function show($id)
    {
        $region = Region::findOrFail($id);
        $books = $region->books;

        return view('regions.show', compact('region', 'books'));

        
    }*/
    public function show($regionID)
    {
        $books = Book::where("region_id", $regionID)->get();
        $region = Region::find($regionID);
        return view('regions.show', compact('books', 'region'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return view('regions.edit',compact('region'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region){



        $region->update($request->all());

        return redirect()->route('regions.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return redirect()->route('regions.index');
    }
}
