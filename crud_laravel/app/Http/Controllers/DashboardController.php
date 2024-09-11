<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Buscar todos os produtos e calcular a soma dos preços
        $products = Product::all();
        $totalPrice = $products->sum('price');

        return view('dashboard', compact('products', 'totalPrice'));
    }
}
