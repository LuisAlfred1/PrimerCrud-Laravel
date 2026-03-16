@extends('layouts.app')

@section('content')
    <main class="flex justify-center items-center min-h-screen ">
        <x-card-form title="Crear Producto">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf

                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <x-input type="text" name="name" placeholder="Ej. Laptop Pro" required />

                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <x-input type="text" name="description" placeholder="(opcional)" />

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Precio</label>
                        <x-input type="number" step="0.01" name="price" placeholder="0.00" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Stock</label>
                        <x-input type="number" name="stock" placeholder="10" />
                    </div>
                </div>

                <label class="block text-sm font-medium text-gray-700 mb-1">Categoría</label>
                <x-input type="text" name="category" placeholder="Tecnología" />

                <button type="submit"
                    class="bg-green-700 hover:bg-green-800 cursor-pointer text-white font-semibold py-3 rounded-lg w-full mt-2 transition-colors shadow-md">
                    Guardar Producto
                </button>
            </form>
        </x-card-form>
    </main>
@endsection