<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <main class="container mx-auto p-6 max-w-7xl">
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-2xl font-medium">Lista de productos</h1>
            <a href="{{ route('products.create') }}"
                class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md"><i class="bi bi-plus"></i> Crear
                producto</a>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full text-sm text-gray-700">
                <thead class="bg-gray-200 text-gray-800 uppercase text-xs tracking-wider">
                    <tr class="text-left">
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">price</th>
                        <th class="px-6 py-3 text-left">Category</th>
                        <th class="px-6 py-3 text-left">Stock</th>
                        <th class="px-6 py-3 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-400">
                    @foreach ($products as $product)
                        <tr class="bg-white">
                            <td class="py-2 px-4">{{ $product->name }}</td>
                            <td class="py-2 px-4">Q{{ $product->price }}</td>
                            <td class="py-2 px-4">{{ $product->category }}</td>
                            <td class="py-2 px-4">{{ $product->stock }}</td>
                            <td class="px-6 py-3 flex items-center gap-2">
                                <a href="{{ route('products.edit', $product) }}"
                                    class="bg-blue-600 hover:bg-blue-700 text-white py-1 px-3 rounded-md"><i
                                        class="bi bi-pencil"></i> Editar</a>

                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded-md cursor-pointer"><i
                                            class="bi bi-trash"></i> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </main>

</body>

</html>
