<x-app-layout>
    <p class="text-6xl text-gray-900 dark:text-white">Numero de producto:</p>
    <p class="text-red-600">{{$productDetail->product_number}}</p>
    <hr>
    <p class="text-6xl text-gray-900 dark:text-white">Nombre:</p>
    <p class="text-red-600">{{$productDetail->name}}</p>
    <hr>
    <p class="text-6xl text-gray-900 dark:text-white">Precio:</p>
    <p class="text-red-600">{{$productDetail->price}}</p>
    <hr>
    <p class="text-6xl text-gray-900 dark:text-white">Descripcion:</p>
    <p class="text-red-600">{{$productDetail->desc}}</p>
</x-app-layout>