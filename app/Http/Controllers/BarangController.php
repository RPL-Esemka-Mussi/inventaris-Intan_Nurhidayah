<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();

        return view('barang', compact('barang'));
    }

    public function tambah()
    {
        return view('addbarang');
    }

    public function insert(Request $res)
    {
        Barang::create([
            "nama_barang" => $res->nama_barang,
            "satuan" => $res->satuan,
            "jumlah" => $res->jumlah,
            "keterangan" => $res->keterangan,
            "lokasi" => $res->lokasi
        ]);

        return redirect('/barang')->with('success', 'Data Berhasil Ditambahkan <3');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('editbarang', compact('barang'));
    }

    public function update(Request $res)
    {
        $barang = Barang::findOrFail($res->id);

        $barang->nama_barang = $res->nama_barang;
        $barang->satuan = $res->satuan;
        $barang->jumlah = $res->jumlah;
        $barang->keterangan = $res->keterangan;
        $barang->lokasi = $res->lokasi;
        $barang->save();

        return redirect('/barang')->with('success', 'Data Berhasil Diganti:)');
    }

    public function delete($id)
    {
        Barang::destroy($id);

        return redirect('/barang')->with('success', 'Data Berhasil Dihapus!!');
    }
}
