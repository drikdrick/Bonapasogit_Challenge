<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function hasilUjian()
    {   
        $ujians = DB::table('hasil_ujians')->get();
        return view('hasilUjian', ['hasil' => $ujians]);
    }
}
