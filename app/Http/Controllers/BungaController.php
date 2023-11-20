<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use App\Http\Requests\StoreBungaRequest;
use App\Http\Requests\UpdateBungaRequest;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Bunga::all();
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBungaRequest $request)
    {
        $data = $request->all();
        $extension = $request->file('gambar')->getClientOriginalExtension();

        $filename= $request->nama. '.' . $extension;
        $path = $request->file('gambar')->storeAs('storage/',$filename);
        $basenamefile = basename($path);
        $request->file('gambar')->move(public_path('storage/'), $basenamefile);

        Bunga::create([
            'nama'=> $data['nama'],
            'harga'=>$data['harga'],
            'stok'=>$data['stok'],
            'gambar'=>$basenamefile,
        ]);
        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bunga $bunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Bunga::findOrFail($id);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBungaRequest $request, $id)
    {
        $data = Bunga::findOrFail($id);
        $data_request =$request->all();
        $data->update([
            'nama'=> $data_request['nama'],
            'harga'=>$data_request['harga'],
            'stok'=>$data_request['stok'],
        ]);
        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Bunga::findOrFail($id);
        $data->delete();
        return redirect()->route('dashboard.index');
    }
}
