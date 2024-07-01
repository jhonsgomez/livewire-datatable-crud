<div class="space-y-6">   
    <div class="px-1">
        <x-input-label for="nombre" :value="__('Nombre:')"/>
        <x-text-input wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div class="px-1">
        <x-input-label for="descripcion" :value="__('Descripcion:')"/>
        <x-text-input wire:model="form.descripcion" id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" autocomplete="descripcion" placeholder="Descripcion"/>
        @error('form.descripcion')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div class="px-1">
        <x-input-label for="stock" :value="__('Stock:')"/>
        <x-text-input wire:model="form.stock" id="stock" name="stock" type="text" class="mt-1 block w-full" autocomplete="stock" placeholder="Stock"/>
        @error('form.stock')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4 px-1">
        <x-primary-button>Enviar</x-primary-button>
    </div>
</div>