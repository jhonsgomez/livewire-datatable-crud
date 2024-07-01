<?php

namespace App\Livewire\Productos;

use App\Livewire\Forms\ProductoForm;
use App\Models\Producto;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public ProductoForm $form;

    public function mount(Producto $producto)
    {
        $this->form->setProductoModel($producto);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('productos.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.producto.edit');
    }
}
