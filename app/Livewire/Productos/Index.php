<?php

namespace App\Livewire\Productos;

use App\Models\Producto;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $productos = Producto::paginate();

        return view('livewire.producto.index', compact('productos'))
            ->with('i', $this->getPage() * $productos->perPage());
    }

    public function delete(Producto $producto)
    {
        $producto->delete();

        return $this->redirectRoute('productos.index', navigate: true);
    }
}
