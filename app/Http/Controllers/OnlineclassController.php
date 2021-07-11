<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineclassController extends Controller
{
    public function index()
    {
    	$data_onlineclass = \App\Models\Onlineclass::all();
    	return view('onlineclass.index',['data_onlineclass' => $data_onlineclass]);
    }

    public function create(Request $request)
    {
    	\App\Models\Onlineclass::create($request->all());
    	return redirect('/onlineclass')->with('sukses','Data berhasil diinput');
    }
    public function edit($id){
        $data = \App\Models\Onlineclass::find($id);
        return view('onlineclass/edit', ['data' => $data]);
    }
    public function update(Request $request,$id){
        $data = \App\Models\Onlineclass::find($id);
        $data->update($request->all());
        return redirect('/onlineclass')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id){
        $data = \App\Models\Onlineclass::find($id);
        $data->delete();
        return redirect('/onlineclass')->with('sukses','Data berhasil dihapus');
    }
}
