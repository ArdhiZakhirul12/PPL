<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyek;
use App\Models\detailTransaksi;
use App\Models\pengembalian;

class AdminProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rilis = proyek::where('status','rilis')->get();
        $diproses = proyek::where('status','diproses')->get();
        $selesai = proyek::where('status','selesai')->get();

        return view('admin.proyek.index', [
            'title' => 'Proyek Saya',
            'rilis' => $rilis,
            'diproses' => $diproses,
            'selesai' => $selesai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyek = proyek::where('id', $id)->first();
        $details = detailTransaksi::where('proyek_id',$id)->get();
        
        $sum = 0;
        foreach ($details as $detail){
            if ($detail->status == 'dibayar'){
            $temp = $detail->transaksi->nominal;
            $sum += $temp;
            }
        }
        $pengembalian = $sum * (130/100);
        return view('admin.proyek.show', [
            'proyek' => $proyek,
            'title' => $proyek->nama_proyek,
            'sum' => $sum,
            'pengembalian' => $pengembalian,
            'kembali' => pengembalian::where('proyek_id',$id)->first()
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        proyek::Where('id', $id)
        ->update(['status' => $request->status]);

        
    
    return redirect('/a/proyek')->with('success', 'Berhasil mengubah status proyek!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
