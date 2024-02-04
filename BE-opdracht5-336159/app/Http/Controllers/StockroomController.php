<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class StockroomController extends Controller
{
    public function index(): View
    {
        return view('jamin.stockroom', [
            
            'data' => Product::with('stockroom')->get(),
        ]);
    }

    public function create()
    {
        
    }

    public function store()
    {
        
    }

    public function show()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
