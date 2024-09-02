<x-app-layout>
    <div class="mt-8 flex justify-end">
        <button type="button" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
            <a href="{{ route('producto.index') }}">Regresar</a>
        </button>
    </div>
    
    <div class="mt-8">
        <div class="text-4xl font-extrabold text-blue-600 dark:text-white mb-12 mt-12 text-center">Edición de Producto</div>
    </div>
    
    <form action="{{ route('producto.update', $LastProduct->id) }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg dark:bg-gray-800">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Nombre Producto</label>
            <input value="{{ $LastProduct->name }}" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-6">
            <label for="branch" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Marca</label>
            <input value="{{ $LastProduct->branch }}" type="text" id="branch" name="branch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-6">
            <label for="product_number" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Número de Producto</label>
            <input value="{{ $LastProduct->product_number }}" type="text" id="product_number" name="product_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Precio</label>
            <input value="{{ $LastProduct->price }}" type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        
        <div class="mb-6">
            <label for="desc" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Descripción</label>
            <textarea id="desc" name="desc" rows="4" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $LastProduct->desc }}</textarea>
        </div>
        
        <div class="mb-6 text-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
        </div>
    </form>
</x-app-layout>
