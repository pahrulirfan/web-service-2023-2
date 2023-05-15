<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biaya15Model;

class Biaya15Controller extends Controller
{
    // untuk menampilkan data
    public function index()
    {
        $data = Biaya15Model::all();

        return view('biaya.index', compact('data'));
    }

    public function create()
    {
        return view('biaya.create');
    }

    public function store(Request $request)
    {
        // validasi data sebelum disimpan
        $request->validate([
            'nama_konsumen' => 'required|min:5',
            'email_konsumen' => 'required|email',
            'jumlah_biaya' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
            'keterangan' => 'required'
        ]);
        // simpan data melalui model
        Biaya15Model::create($request->all());
        return to_route('biaya.index')->with('pesan', 'Data Berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = Biaya15Model::where('id', $id)->first();
        return view('biaya.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Biaya15Model::where('id', $id)->first();
        $request->validate([
            'nama_konsumen' => 'required|min:5',
            'email_konsumen' => 'required|email',
            'jumlah_biaya' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
            'keterangan' => 'required'
        ]);
        $data->update($request->all());
        return to_route('biaya.index')->with('pesan', 'Data Berhasil disimpan.');
    }

    public function delete($id)
    {
        $data = Biaya15Model::where('id', $id)->first();
        $data->delete();
        return to_route('biaya.index')->with('pesan', 'Data Berhasil dihapus.');
    }
}
