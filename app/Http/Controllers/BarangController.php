<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Database\Seeders\KategoriSeeder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Kategoris;
use App\Models\Barangs;

use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Barang';
        $barangss= Barangs::all();
    //     $Barangs = DB::select('
    //     select *, Barangs.id as barang_id, Kategoris.nama as
    //    kategori_name
    //     from Barangs
    //      left join kategoris on Barangs.kategori_id = kategoris.id');

        return view('Produk.listProduk',[
            'pageTitle'=> $pageTitle,
            'barang' => $barangss
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = "Tambah Produk";
        $kategoris = Kategoris::all();

        return view('Produk.createProduk', compact('pageTitle', 'kategoris'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => 'Isi atribute terlebih dahulu',
            'email' => 'Isi attribute dengan benar',
            'numeric' => 'Isi dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'desc' => 'required',
            'foto' => 'required'
        ], $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $barangss = new Barang;
            $barangss -> nama = $request->Nama;
            $barangss -> harga = $request->Harga;
            $barangss -> foto = $request-> Foto;
            $barangss -> desc = $request ->deskripsi;
            $barangss -> kategori_id = $request->kategori;
            $barangss ->save();
        return redirect()->route('Barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Produk';
        $barangss = Barangs::find($id);
        // $Barangs = collect(DB::select('
        // select *, Barangs.id as barang_id, Kategoris.nama as
        // kategori_nama
        // from Barangs
        //  left join kategoris on Barangs.kategori_id = kategoris.id =?',
        //     [$id]))->first();

        return view('Produk.show', compact('pageTitle', 'barangss'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $pageTitle ="Edit Barang";
       $kategoris = Kategori::all();
       $barangss = Barang::find($id);

       return view('Produk.ubah', compact('pageTitle', 'kategoris',
'Barangs'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = [
            'required' => 'Isi atribute terlebih dahulu',
            'email' => 'Isi attribute dengan benar',
            'numeric' => 'Isi dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'harga' => 'required|numeric',
            'desc' => 'required',
            'foto' => 'required'
        ], $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $barangss = Barang::find($id);
            $barangss -> nama = $request->nama;
            $barangss -> foto = $request-> foto;
            $barangss -> harga = $request->harga;
            $barangss -> kategori_id = $request->kategori;
            $barangss -> desc = $request ->deskripsi;
            $barangss ->save();
        return redirect()->route('Barang.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // QUERY BUILDER
        DB::table('barangss')
            ->where('id', $id)
            ->delete();
        return redirect()->route('barangs.index');
    }
}
