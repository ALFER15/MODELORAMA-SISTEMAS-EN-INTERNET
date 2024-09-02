<x-app-layout>
    <div class="fixed top-0 left-0 right-0 bg-white shadow-md p-4 flex justify-between items-center">
        <a href="{{ route('producto.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Regresar</a>
        <a href="{{ route('producto.create') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Crear</a>
    </div>

    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 pt-16">
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg w-full max-w-2xl shadow-lg">
            @if(session('edit'))
                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <span class="font-medium">Alerta!</span> {{ session('edit') }}
                </div>
            @endif

            <h1 class="text-3xl font-bold text-center mb-6 text-gray-900 dark:text-white">Detalles del Producto</h1>

            <div class="grid gap-4">
                <div class="bg-blue-50 dark:bg-gray-700 p-4 rounded-lg">
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-300">Número de producto:</p>
                    <p class="text-blue-500 text-lg">{{ $productDetail->product_number }}</p>
                </div>

                <div class="bg-blue-50 dark:bg-gray-700 p-4 rounded-lg">
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-300">Nombre:</p>
                    <p class="text-blue-500 text-lg">{{ $productDetail->name }}</p>
                </div>

                <div class="bg-blue-50 dark:bg-gray-700 p-4 rounded-lg">
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-300">Precio:</p>
                    <p class="text-blue-500 text-lg">${{ $productDetail->price }}</p>
                </div>

                <div class="bg-blue-50 dark:bg-gray-700 p-4 rounded-lg">
                    <p class="text-lg font-semibold text-gray-800 dark:text-gray-300">Descripción:</p>
                    <p class="text-blue-500 text-lg">{{ $productDetail->desc }}</p>
                </div>
            </div>

            <div class="flex justify-center space-x-4 mt-6">
                <a href="{{ route('producto.update', $productDetail->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Editar</a>

                <form action="{{ route('producto.delete', $productDetail->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
