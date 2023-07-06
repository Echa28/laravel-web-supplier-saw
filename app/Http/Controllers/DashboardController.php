<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Alternatif;


class DashboardController extends Controller {

    public function index() {
        
        $alternatif= Alternatif::count();
        $kriteria= Kriteria::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('alternatif','kriteria',))
        ;

        

        
    }
    
}
