<?php

namespace App\Http\Controllers;

use App\Models\MasterAktivitas;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class MasterAktivitasController extends Controller
{
      /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $dataaktivitas = MasterAktivitas::paginate(4);
            return view('master.masteraktivitas.index', compact(['dataaktivitas']));
        }
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
        return view('master.masteraktivitas.create');
        }
        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
        $request->validate([
        'ma_nama_aktivitas' => 'required|min:5|max:30',
        ]);
        $masteraktivitas = new MasterAktivitas();
        $masteraktivitas->ma_nama_aktivitas = $request->ma_nama_aktivitas;
        $masteraktivitas->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('master_aktivitas.index');
        }
        /**
        * Display the specified resource.
        *
        * @param  \App\MasterPic  $pic
        * @return \Illuminate\Http\Response
        */
        public function show(MasterPic $pic)
        {
        // return view('',compact(''));
        }
        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\MasterPic  $pic
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            // dd($pic);
            $aktivitas = MasterAktivitas::find($id);
            return view('master.masteraktivitas.edit',compact('aktivitas'));
        }
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\MasterPic  $pic
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
        $request->validate([
        'ma_nama_aktivitas' => 'required|min:5|max:20',
        ]);
        $aktivitas = MasterAktivitas::find($id);
        $aktivitas->ma_nama_aktivitas = $request->ma_nama_aktivitas;
        $aktivitas->save();
        Alert::success('Berhasil', 'Data Berhasil Diedit');
        return redirect()->route('master_aktivitas.index');
        }
        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Company  $company
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
            $id = MasterAktivitas::find($id);
            $id->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('master_aktivitas.index');
        }
}
