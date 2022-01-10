<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use Illuminate\Http\Request;
use Session;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('donasi.index', compact('donasi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required',
            'ket' => 'required',
        ]);

        $donasi = new Donasi;
        $donasi->nama = $request->nama;
        $donasi->email = $request->email;
        $donasi->no_tlpn = $request->no_tlpn;
        $donasi->ket = $request->ket;
        $donasi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('donasi.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('donasi.show', compact('donasi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('donasi.edit', compact('donasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_tlpn' => 'required',
            'ket' => 'required',
        ]);

        $donasi = Donasi::findOrFail($id);
        $donasi->nama = $request->nama;
        $donasi->email = $request->email;
        $donasi->no_tlpn = $request->no_tlpn;
        $donasi->ket = $request->ket;
        $donasi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data edited successfully",
        ]);

        return redirect()->route('donasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data deleted successfully",
        ]);
        return redirect()->route('donasi.index');

    }
}
