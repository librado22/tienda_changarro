<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // Obtén todos los productos
        return view('home', compact('productos')); // Pasa los productos a la vista
    }
}
