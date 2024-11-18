<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();

        return view('barang.index', compact('barang'));
    }

    public function create(){
        return view('barang.create');
    }

    public function store(Request $request){
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/foto', $foto->hashName());

        Barang::create([
            'foto' => $foto->hashName(),
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('barang.index');
    }

    public function edit(barang $barang){
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, barang $barang){
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->hashFile('foto')){
            $foto = $request->file('foto');
            $foto->storeAs('public/foto', $foto->hashName());

            Storage::delete('public/foto/'.$barang->foto);

            $barang->update([
                'foto' => $foto->hashName(),
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi
            ]);
        }else{
            $barang->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi
            ]);
        }

        return redirect()->route('barang.index');
    }

    public function destroy(Barang $barang){
        Storage::delete('public/foto/'.$barang->foto);

        $barang->delete();

        return redirect()->route('barang.index');
    }
}
