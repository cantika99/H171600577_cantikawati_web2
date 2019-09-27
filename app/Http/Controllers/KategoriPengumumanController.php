<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    function index(){
    	$KategoriPengumuman=KategoriPengumuman::all();
    return view('Kategori_Pengumuman.index',compact('KategoriPengumuman'));
    }
}