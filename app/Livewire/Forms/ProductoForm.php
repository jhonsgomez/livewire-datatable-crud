<?php

namespace App\Livewire\Forms;

use App\Models\Producto;
use Livewire\Form;

class ProductoForm extends Form
{
    public ?Producto $productoModel;
    
    public $nombre = '';
    public $descripcion = '';
    public $stock = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
            'descripcion'=> '',
			'stock' => 'required|integer',
        ];
    }

    public function setProductoModel(Producto $productoModel): void
    {
        $this->productoModel = $productoModel;
        
        $this->nombre = $this->productoModel->nombre;
        $this->descripcion = $this->productoModel->descripcion;
        $this->stock = $this->productoModel->stock;
    }

    public function store(): void
    {
        $this->productoModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->productoModel->update($this->validate());

        $this->reset();
    }
}
