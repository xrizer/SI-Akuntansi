<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\daftarakuntansi;

class DaftarakunController extends Controller
{
     public function dashboard()
    {
        return view('pemain.dashboard');
    }
      public function index1()
    {
        return view('pemain.daftarakun');
    }
     public function index2()
    {
        return view('pemain.buatakun');
    }

      public function create(Request $request)
    {
        daftarakuntansi::create($request->all());
        return redirect('/pemain/daftarakun/add');    
    }
}
