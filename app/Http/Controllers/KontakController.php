<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kontak::all();
        return view('kontaklist',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //perintahkan view untuk menampilkan form data baru
        return view('kontaknew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kontak = new Kontak;
        $kontak->nama=$request->nama;
        $kontak->alamat=$request->alamat;
        $kontak->telepon=$request->telepon;
        $kontak->gender=$request->gender;
        $kontak->save();
        return redirect('kontak');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kontak $kontak)
    {
        return view('kontakedit',compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $kontak->fill($request->all());
        $kontak->save();
        return redirect('kontak');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect('kontak');
    }
}
