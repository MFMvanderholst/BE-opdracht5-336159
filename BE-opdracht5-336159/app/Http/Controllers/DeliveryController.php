<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_per_supplier;
use Illuminate\View\View;

class DeliveryController extends Controller
{
    public function index(): View
    {
        return view('jamin.info.delivery', [
            
            'data' => Product_per_supplier::with('supplier', 'product')->get(),
        ]);
    }

    public function create()
    {
        
    }

    public function store()
    {
        
    }

    public function show($id)
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
