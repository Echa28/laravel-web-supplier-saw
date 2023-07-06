<?php

namespace App\Http\Controllers;

use App\Models\Variable;
use Illuminate\Http\Request;

class VariableController extends Controller {

    public function index() {
        return view('datavariable', [
            'users' => Variable::all(),
            'title' => 'Data variable'
        ]);
    }
    public function add() {
        return view('adddatavariable',[
            'title' => 'Tambah Data variable'
        ]);
    }
    public function edit($id){
        
        $variable = Variable::where('id', $id)->first();

        return view('editvariable', [
            'variable' => $variable,
            'title' => 'Edit Data variable'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_variable      = $request->input('nama_variable');
        $keterangan       = $request->input('keterangan');
        $nilai   = $request->input('nilai');
        
        $variable = Variable::where('id', $id)->first();
        $variable->nama_variable    = $nama_variable;
        $variable->keterangan    = $keterangan;
        $variable->nilai = $nilai;

        $variable->save();

        return redirect()->to('/variable');
    }


    public function dashboard(){
        $variable= Variable::count();

        return view('main', compact('variable'));

    }

    public function store(Request $request) {
        $nama_variable     = $request->input('nama_variable');
        $keterangan       = $request->input('keterangan');
        $nilai   = $request->input('nilai');

        // TODO: Compare $password and $rePassword

        $variable           = new Variable;
        $variable->nama_variable    = $nama_variable;
        $variable->keterangan    = $keterangan;
        $variable->nilai = $nilai;

        $variable->save();

        return redirect()->to('/variable');
    }
    public function delete($id) {
        $variable = Variable::where('id', $id)->first();
        $variable->delete();
        return redirect()->back();
    }
}
