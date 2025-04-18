<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'valeur1' => 'required|numeric',
            'valeur2' => 'required|numeric',
            'valeur3' => 'required|numeric',
            'valeur4' => 'required|numeric',
        ]);
        
        $moyenne = ($request->valeur1 + $request->valeur2 + $request->valeur3 + $request->valeur4) / 4;
        
        $product = Product::create([
            'valeur1' => $request->valeur1,
            'valeur2' => $request->valeur2,
            'valeur3' => $request->valeur3,
            'valeur4' => $request->valeur4,
            'moyenne' => $moyenne,
        ]);
        
        return response()->json([
            'message' => 'Product created successfully',
            'product' => $product,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json([
            'product' => $product,
            'moyenne' => $product->moyenne,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'valeur1' => 'required|numeric',
            'valeur2' => 'required|numeric',
            'valeur3' => 'required|numeric',
            'valeur4' => 'required|numeric',
        ]);
        
        $moyenne = ($request->valeur1 + $request->valeur2 + $request->valeur3 + $request->valeur4) / 4;
        
        $product->update([
            'valeur1' => $request->valeur1,
            'valeur2' => $request->valeur2,
            'valeur3' => $request->valeur3,
            'valeur4' => $request->valeur4,
            'moyenne' => $moyenne,
        ]);
        
        return response()->json([
            'message' => 'Product updated successfully',
            'product' => $product,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'Product deleted successfully',
            'product' => $product,
        ]);
    }
}