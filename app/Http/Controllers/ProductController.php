<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        $categories_lv_1 = DB::table('categories')->where('parent_id', '0')->get();
        // function data_tree1($categories, $id_lv , $level = 0){
        //     $categories_lv_1 = [];
            
        //     foreach ($categories as $item) {
        //         if($item->parent_id == $id_lv){    
        //             $categories_lv_1['level'] = $level;
        //             $categories_lv_1[] = $item;
        //             unset($categories[$item->id]);
        //             $categories_lv_1_child = data_tree1( $categories, $item->id, $level + 1);
        //             $categories_lv_1 = array_merge($categories_lv_1, $categories_lv_1_child);
                    
        //         }
        //         // else{
        //         //     foreach ($products as $item) {
        //         //         if($item->id == $id_lv){
        //         //             $categories_lv_1 = array_merge($categories_lv_1, $categories_lv_1_child);
        //         //         }
        //         //     }
                    
        //         // }

        //     }
        //     return $categories_lv_1;
        // };
        //$categories_lv_1 = data_tree1($categories, 0);
        $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();

        return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();

        // $productBestSale = Product::orderBy('count_buy', 'desc')->limit(5)->get();

        // $productsLLatest = Product::orderBy('count_buy', 'asc')->limit(3)->get();

        // return view('thucdon', compact('productBestSale', 'productsLLatest'));
        //$categories_lv_1 = DB::table('categories')->where('parent_id', '0')->get();
        // $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();
        
        $categories_lv_2 = [];

        if($id == 1){
            $categories_lv_2 = DB::table('categories')->where('parent_id', '1')->get();
        }
        else if($id == 7){
            $categories_lv_2 = DB::table('categories')->where('parent_id', '7')->get();
        }
        else{
            
        }



        function data_tree2($categories, $id_lv , $level = 0){
            $categories_lv_1 = [];
            
            foreach ($categories as $item) {
                if($item->parent_id == $id_lv){    
                    $categories_lv_1['level'] = $level;
                    $categories_lv_1[] = $item;
                    unset($categories[$item->id]);
                    $categories_lv_1_child = data_tree2( $categories, $item->id, $level + 1);
                    $categories_lv_1 = array_merge($categories_lv_1, $categories_lv_1_child);
                    
                }
                // else{
                //     foreach ($products as $item) {
                //         if($item->id == $id_lv){
                //             $categories_lv_1 = array_merge($categories_lv_1, $categories_lv_1_child);
                //         }
                //     }
                    
                // }

            }
            return $categories_lv_1;
        };
        $categories_lv_1 = data_tree2($categories, 0);

        // $product_parentId_pizza =  DB::table('products')->where([
        //     ['category_id', '=', '2'],
        //     ['category_id', '=', '3'],
        //     ['category_id', '=', '4'],
        //     ['category_id', '=', '5'],
        //     ])
        //     ->get();   
        
        

        return view('thucdon', compact('categories_lv_1', 'categories_lv_2', 'id', 'categories'));

    }

    

    public function phanLoaiTheoCategories(){
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
