<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
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