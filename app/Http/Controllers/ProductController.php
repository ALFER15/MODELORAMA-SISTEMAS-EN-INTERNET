<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(25);
        return view('product.index-producto', compact('products'));
    }

    public function create()
    {
        return view('product.create-producto');
    }

    public function show($product)
    {
        $productDetail = Product::find($product);
        return view('product.show-producto', compact('productDetail'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->branch = $request->branch;
        $product->product_number = $request->product_number;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->save();
        return redirect()->route('producto.index');
    }

    public function delete($product)
    {
        $productoborrado = Product::findOrFail($product);
        $productoborrado->delete();
        return redirect()->route('producto.index')->with('success', 'Uno o varios registros han sido eliminados');
    }

    public function updateView($product)
    {
        $LastProduct = Product::find($product);
        return view('product.update-producto', compact('LastProduct'));
    }

    public function update(Request $request, $id)
    {
        $productoActualizado = Product::findOrFail($id);
        $productoActualizado->name = $request->name;
        $productoActualizado->branch = $request->branch;
        $productoActualizado->product_number = $request->product_number;
        $productoActualizado->price = $request->price;
        $productoActualizado->desc = $request->desc;
        $productoActualizado->save();

        return redirect()->route('producto.show', $productoActualizado->id)
            ->with('edit', 'Se han modificado registros ');
    }
    public function getReport(){
        $products = Product::all();
        
        $pdf = Pdf::loadView('product.report-product', compact('products'));
        return $pdf->stream('reporte-productos.pdf');
    }
}
