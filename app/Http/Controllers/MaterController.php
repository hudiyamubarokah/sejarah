<?php

namespace App\Http\Controllers;

use App\Models\materi;
use Illuminate\Http\Request;

class MaterController extends Controller
{
    
    public function allmateri(){
        try{$rawdata = materi::select('id','judul', 'link_vd', 'nama_file')->get();
        return response()->json($rawdata);}catch(\Exception $e){
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }

    }

}
