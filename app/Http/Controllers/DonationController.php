<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDonationRequest;
use App\Http\Requests\UpdateDonationRequest;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = Donation::all();
        return view('donation.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDonationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonationRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'phone' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'image' => 'image|file|max:10240',
            'rek' => '',
            'pesan' => '',
            'status' => '',
         ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('donation-image');
        }
 
         Donation::create($validatedData);
 
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        return view('donation.show' ,[
            'donation' => $donation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        return view('donation.edit', compact('donation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonationRequest  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonationRequest $request, Donation $donation)
    {
        $rules = [
            'status' => 'required',
            'admin' => '',
         ];
 
         
         $validatedData = $request->validate($rules);
 
         Donation::where('id', $donation->id)->update($validatedData);
 
         return redirect()->route('donation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        if($donation->image){
            Storage::delete($donation->image);
        }
        $donation->delete();
        return redirect()->route('donation.index');
    }
}
