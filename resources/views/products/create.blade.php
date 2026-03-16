<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<main class="flex justify-center items-center min-h-screen">
    <a href="{{ route('products.index') }}" class="text-xl absolute top-4 left-4 text-blue-700 hover:text-blue-800">
        <i class="bi bi-arrow-left"></i> Volver a la lista
    </a>
    <div class="max-w-sm w-full bg-white shadow-lg p-6 border border-gray-200">
        <h1 class="font-medium text-2xl mb-2 text-center">Crear Producto</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <label for="nombre" class="block mb-2">Nombre</label>
            <input type="text" name="name" placeholder="Nombre"
                class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
            <label for="descripcion" class="block mb-2">Descripción</label>
            <input type="text" name="description" placeholder="(opcional)"
                class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
            <label for="precio" class="block mb-2">Precio</label>
            <input type="number" step="0.01" name="price" placeholder="Precio"
                class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
            <label for="categoria" class="block mb-2">Categoría</label>
            <input type="text" name="category" placeholder="Categoría"
                class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">
            <label for="stock" class="block mb-2">Stock</label>
            <input type="number" name="stock" placeholder="Stock"
                class="border border-gray-300 rounded-md py-2 px-4 outline-none w-full mb-1">

            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white py-2 w-full mt-4 cursor-pointer">Guardar</button>
        </form>
    </div>
</main>
