<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    //definimos unas variables
    public $productos, $descripcion, $cantidad, $id_producto;
    public $modal = false;

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }
}
