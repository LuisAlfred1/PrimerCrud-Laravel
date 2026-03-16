@extends('layouts.app')

@section('content')
    <main class="container mx-auto p-6 max-w-7xl">
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
            <h1 class="text-2xl font-semibold text-gray-800">Lista de productos</h1>

            <div class="flex items-center gap-3 w-full md:w-auto">
                <div class="relative w-full md:w-64">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" placeholder="Buscar producto..."
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-gray-300 focus:border-gray-300 outline-none transition-all text-sm">
                </div>

                <a href="{{ route('products.create') }}"
                    class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md flex items-center gap-2 whitespace-nowrap transition-colors">
                    <i class="bi bi-plus-lg"></i> Nuevo producto
                </a>
            </div>
        </div>

        <div class="overflow-hidden bg-white rounded-xl shadow-sm border border-gray-200">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-200 text-gray-700 uppercase text-xs font-semibold">
                    <tr>
                        <th class="px-6 py-4">Producto</th>
                        <th class="px-6 py-4">Categoría</th>
                        <th class="px-6 py-4 text-center">Precio</th>
                        <th class="px-6 py-4 text-center">Stock</th>
                        <th class="px-6 py-4 text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $product->name }}</td>
                            <td class="px-6 py-4">
                                <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded text-xs">
                                    {{ $product->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">Q{{ number_format($product->price, 2) }}</td>
                            <td class="px-6 py-4 text-center">
                                <span class="{{ $product->stock > 10 ? 'text-green-600 font-medium' : 'text-red-500 font-bold' }}">
                                    {{ $product->stock }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-end gap-3">
                                    <a href="{{ route('products.edit', $product) }}"
                                        class="text-blue-600 hover:text-blue-800 transition-colors" title="Editar">
                                        <i class="bi bi-pencil-square text-lg"></i>
                                    </a>

                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                        onsubmit="return confirm('¿Eliminar producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-600 hover:text-red-800 cursor-pointer transition-colors"
                                            title="Eliminar">
                                            <i class="bi bi-trash text-lg"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
