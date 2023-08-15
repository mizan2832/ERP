<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Party;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\MerchandiserGroup;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parties = Party::all();
        $countries = Country::all();
        $buyers = Buyer::all();
        $groups = MerchandiserGroup::all();
        return view('pages.profile.buyer')
                                            ->withParties($parties)
                                            ->withCountries($countries)
                                            ->withBuyers($buyers)
                                            ->withGroups($groups);
    }

    public function getAllBuyer()
    {
        $buyers = Buyer::all();
        return response()->json($buyers);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buyer = new Buyer();
        $buyer->full_name = $request->full_name;
        $buyer->short_name = $request->short_name;
        $buyer->email = $request->email;
        $buyer->party_type = $request->party_type;
        $buyer->address = $request->address;
        $buyer->tag_company = $request->tag_company;
        $buyer->credit_limit = $request->credit_limit;
        $buyer->supplier = $request->supplier;
        $buyer->country = $request->country;
        $buyer->buffer_days = $request->buffer_days;
        $buyer->web = $request->website;
        $buyer->status = $request->status;
        $buyer->partial = $request->partial;
        $buyer->bank = $request->bank;
        $buyer->team = $request->team;
        $buyer->save();
        return response()->json($buyer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        //
    }
}
