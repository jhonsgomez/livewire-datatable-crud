<x-slot name="header">
    <div class="flex justify-between items-center">  
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
        <a type="button" wire:navigate href="/"
            class="block rounded-md bg-red-500 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i
                class="fa-solid fa-door-open"></i></a>
    </div>
</x-slot>

<div class="py-9">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="w-full">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Lista de
                            <span
                                class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-base font-medium text-indigo-700 ring-1 ring-inset ring-indigo-700/10">{{ __('Productos') }}</span>
                        </h1>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <a type="button" wire:navigate href="{{ route('productos.create') }}"
                            class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i
                                class="fa-regular fa-square-plus"></i> Nuevo</a>
                    </div>
                </div>

                <div class="flow-root w-11/12 mx-auto">
                    <div class="mt-8 overflow-x-auto">
                        <div class="min-w-full py-2 align-middle">
                            <table id="data-table" class="min-w-full divide-y divide-gray-300">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">
                                            No</th>
                                        <th scope="col"
                                            class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">
                                            Nombre</th>
                                        <th scope="col"
                                            class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">
                                            Descripcion</th>
                                        <th scope="col"
                                            class="py-3 pl-4 pr-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">
                                            Stock</th>
                                        <th scope="col"
                                            class="px-3 py-3 text-center text-xs font-semibold uppercase tracking-wide text-gray-500">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach ($productos as $producto)
                                        <tr class="even:bg-gray-50" wire:key="{{ $producto->id }}">
                                            <td
                                                class="whitespace-nowrap text-center py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">
                                                {{ $producto->id }}
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                {{ $producto->nombre }}
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                {{ $producto->descripcion }}
                                            </td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                {{ $producto->stock }}
                                            </td>
                                            <td
                                                class="text-center whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                                <!-- wire:navigate href="{{ route('productos.show', $producto->id) }}"
                                                            class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Show') }} -->
                                                <a wire:navigate href="{{ route('productos.edit', $producto->id) }}"
                                                    class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Edit') }}</a>
                                                <button class="text-red-600 font-bold hover:text-red-900" type="button"
                                                    wire:click="delete({{ $producto->id }})" wire:confirm="¿Estás seguro?">
                                                    {{ __('Delete') }}
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-4 px-4">
                                {!! $productos->withQueryString()->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>