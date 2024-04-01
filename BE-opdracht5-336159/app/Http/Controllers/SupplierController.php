<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\ProductPerSupplier;
use App\Models\Product;
use App\Models\Stockroom;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index(): View
    {
        return view('jamin.supplier', [
            
            // 'supplier' => Supplier::with('supplyproduct')->select('product_id', DB::raw('COUNT(product_id)'))
            //                                             ->groupBy('supplier_id')->get(),

            // 'supplier' => Supplier::with('supplyproduct')->join('product_per_suppliers', 'suppliers.id', '=', 'product_per_suppliers.supplier_id')
            //                                  ->select('product_per_suppliers.product_id', DB::raw('COUNT(product_per_suppliers.product_id)'))
            //                                  ->groupBy('product_per_suppliers.product_id')
            //                                  ->get(),

            'supplier' => DB::table('product_per_suppliers')
                            ->select(DB::raw('poduct_id'))
                            ->having('supplier_id', DB::raw('COUNT(product_id)'))
                            ->orderby('product_id', 'ASC'),
            

                                             
            'supplier' => Supplier::all(),
            
        ]);
    }

    public function show($id)
    {
        $supplier = Supplier::findorfail($id);

        $result = DB::select("SELECT S.id
                                    , P.name AS name
                                    ,MAX(SR.number_present) AS number_present
                                    ,SR.packaging_unit  AS packaging_unit
                                    ,MAX(PPS.date_delivery) AS date_delivery
                                    
                             FROM suppliers as S
                            
                             INNER JOIN product_per_suppliers as PPS 
                            
                             ON S.id = PPS.supplier_id
                            
                             INNER JOIN products as P
                            
                             ON P.id = PPS.product_id
                            
                             INNER JOIN stockrooms as SR

                             ON P.id = SR.product_id                            
                            
                            WHERE S.id = :id
                            
                            GROUP BY S.id, P.name, SR.packaging_unit;", [':id' =>  $id]);

        // dd($result);
       
        // $product = Product_per_supplier::with('supplier', 'product', 'stockroom')->get();
        return view('jamin.info.deliveryMade', ["supplier"=>$supplier, 'result'=>$result]);
       
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
