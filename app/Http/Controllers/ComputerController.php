<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()//controlador de la vista shop
    {
        $comp = Computer::all();
        //return $comp;
        //$comp = Computer::find($comp);
        return view('shop', compact('comp'));

    }

    public function show($comp)//controlador de la vista shop/single
    {
        $comp = Computer::find($comp);

        //return $comp;
        //$comp = Computer::find($comp);
        return view('shop-single', compact('comp'));

    }
    
}
