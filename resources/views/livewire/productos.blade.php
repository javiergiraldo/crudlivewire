
<x-slot name="header">
    <h1 class="text-gray-900">Crud con Laravel 9 y Livewire</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Id</th>
                        <th class="px-4 py-2">Descripcion</th>
                        <th class="px-4 py-2">Cantidad</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{ $producto->id }}</td>
                        <td class="border px-4 py-2">{{ $producto->descripcion }}</td>
                        <td class="border px-4 py-2">{{ $producto->cantidad }}</td>
                        <td>
                            <button wire:click="editar({{ $producto->id }})"></button>
                            <button wire:click="borrar({{ $producto->id }})"></button>
                        </td>
                    </tr>            
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

