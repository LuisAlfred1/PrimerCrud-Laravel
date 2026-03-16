<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Iniciamos la consulta sin ejecutarla todavía (sin get ni all)
        $query = Product::query();

        //Si hay un término de búsqueda, agregamos condiciones a la consulta
        if ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('category', 'like', "%{$search}%");
        }

        // Aquí es donde puedes elegir entre traer todos o paginar
        // Si usas paginate, Laravel crea la lógica de páginas automáticamente
        $products = $query->orderBy('id', 'desc')->paginate(5);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
