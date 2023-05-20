<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePartnerRequest;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::get();
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::get();
        return view('partners.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePartnerRequest $request)
    {
        $partner = new Partner;
        $partner->name = $request->name;
        $partner->image = $request->image;
        $partner->link = $request->link;
        $partner->type = $request->type;

        if($partner->save()){
            return redirect()->route('partners.index')->with('success', 'Partner created successfuly!');
        }

        return view('partners.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = Partner::where('id', $id)->first();
        $types = Type::get();
      
        return view('partners.edit', compact('partner', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePartnerRequest $request, Partner $partner)
    {
        $partner->name = $request->name;
        $partner->image = $request->image;
        $partner->link = $request->link;
        $partner->type = $request->type;

        if($partner->save()){
            return redirect()->route('partners.index')->with('success', 'Partner updated successfuly!');
        }

        return redirect()->route('blogs.index')->with('error', 'Something went wrong!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        if($partner->delete()) {
            return redirect()->route('partners.index')->with('success', 'Partner deleted successfuly!');
        }
        return redirect()->route('partners.index')->with('error', 'Something went wrong!');
    }
}
