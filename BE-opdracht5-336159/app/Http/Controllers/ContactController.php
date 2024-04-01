<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('jamin.suppliers.index', [
            
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
                                    , S.name
                                    ,S.contact_person
                                    ,S.supplier_number
                                    ,S.mobile
                                    ,C.street
                                    ,C.streetnumber
                                    ,C.zip
                                    ,C.city
                                    
                             FROM suppliers as S
                            
                             INNER JOIN contacts as C 
                            
                             ON S.contact_id = C.id                      
                            
                             WHERE S.id =" . $id);

        // dd($result);
       
        // $product = Product_per_supplier::with('supplier', 'product', 'stockroom')->get();
        return view('jamin.suppliers.show', ["supplier"=>$supplier, 'result'=>$result]);
    }

    public function edit($id)
    {
        $supplier = Supplier::findorfail($id);

        $result = DB::select("SELECT S.id
                                    , S.name
                                    ,S.contact_person
                                    ,S.supplier_number
                                    ,S.mobile
                                    ,C.street
                                    ,C.streetnumber
                                    ,C.zip
                                    ,C.city
                                    
                             FROM suppliers as S
                            
                             INNER JOIN contacts as C 
                            
                             ON S.contact_id = C.id                      
                            
                             WHERE S.id =" . $id);

        // dd($result);
       
        // $product = Product_per_supplier::with('supplier', 'product', 'stockroom')->get();
        return view('jamin.suppliers.update', ["supplier"=>$supplier, 'result'=>$result]);
    }
}
