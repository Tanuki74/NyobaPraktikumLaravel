<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = provinsi::All();
        return view('provinsi', compact('provinsi'));
    }


}
