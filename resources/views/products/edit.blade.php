@extends('layouts.app')

@section('content')
    <main class="flex justify-center items-center min-h-screen">
        <div class="max-w-sm w-full bg-white shadow-lg p-6 border border-gray-200">
            <h1 class="font-medium text-2xl mb-2 text-center">Editar Producto</h1>

            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="text" name="name" value="{{ $product->name }}"
                    class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
                <input type="text" name="description" value="{{ $product->description }}"
                    class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
                <input type="number" step="0.01" name="price" value="{{ $product->price }}"
                    class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
                <input type="text" name="category" value="{{ $product->category }}"
                    class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
                <input type="number" name="stock" value="{{ $product->stock }}"
                    class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">

                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 rounded-md text-white py-2 w-full mt-4 cursor-pointer">Actualizar</button>
            </form>
        </div>
    </main>
@endsection
