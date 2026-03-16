@extends('layouts.app')

@section('content')
    <main class="flex justify-center items-center min-h-screen">
        <x-card-form title="Editar Producto">
            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')

                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <x-input type="text" name="name" value="{{ $product->name }}" />

                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <x-input type="text" name="description" value="{{ $product->description }}" />

                <x-input type="number" step="0.01" name="price" value="{{ $product->price }}" />
                <x-input type="text" name="category" value="{{ $product->category }}" />
                <x-input type="number" name="stock" value="{{ $product->stock }}" />

                <button type="submit"
                    class="bg-blue-700 hover:bg-blue-800 cursor-pointer text-white font-semibold py-3 rounded-lg w-full mt-2 transition-colors shadow-md">
                    Actualizar Cambios
                </button>
            </form>
        </x-card-form>
    </main>
@endsection
