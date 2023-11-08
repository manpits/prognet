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
        //DB::statement('insert into kontaks (nama,alamat,telepon,gender) values (?,?,?,?)',['Wahyu','Denpasar','82149','Pria']);
        //$data = DB::select('select * from kontaks where gender=? and alamat=?',['Pria','Denpasar']);

        //Memanggil semua data di model / table kontaks
        $data = Kontak::all();

        // $data = Kontak::where('alamat','Denpasar')
        // ->orWhere('alamat','Singaraja')
        // ->orWhere('alamat','Tabanan')
        // ->get();

        // $data = Kontak::where('alamat','Denpasar')
        // ->orWhere(function($query){
        //     $query->where('gender','Wanita')
        //     ->where('telepon','0986776');
        // })
        // ->get();

        // format data dan tampilkan di veiw
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
        // $kontak->nama = $request->nama;
        // $kontak->alamat = $request->alamat;
        // $kontak->telepon = $request->telepon;
        // $kontak->gender = $request->gender;
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
