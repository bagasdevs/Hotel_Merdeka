<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(){
        $data = Fasilitas::all();
        return view('admin', compact('data'));
    }

    public function addfasilitas(){
        return view('addfasilitas');
        }

    public function insertdata(Request $request){
        //dd($request->all());
        $data = Fasilitas::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotofasilitas/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('fasilitas')->with('success','Data Berhasil Di Tambahkan');
        }

    public function tmpfasilitas($id){
        $data = Fasilitas::find($id);
        //dd($data);

        return view('tmpfasilitas', compact('data'));
        }

    public function updatedata(Request $request ,$id){
        $data = Fasilitas::find($id);
        $data->update($request->all());
        return redirect()->route('fasilitas')->with('success','Data Berhasil Di Update');
        }

    public function deletedata($id){
        $data = Fasilitas::find($id);
        $data->delete();
        return redirect()->route('fasilitas')->with('success','Data Berhasil Di Hapus');
        }
    
}
