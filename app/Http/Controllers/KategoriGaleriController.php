<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    function index(){
    	$KategoriGaleri=KategoriGaleri::all();
    return view('Kategori_Galeri.index',compact('KategoriGaleri'));
    }
}