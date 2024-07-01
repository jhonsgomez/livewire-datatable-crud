<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom DataTable -->
    <style>
        table.dataTable thead th,
        table.dataTable thead td,
        table.dataTable tfoot th,
        table.dataTable tfoot td {
            text-align: center !important;
        }

        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: center !important;
        }

        div.dt-container .dt-paging {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        div.dt-container .dt-paging .dt-paging-button.disabled:hover {
            cursor: pointer;
            color: white !important;
            background-color: #4F46E5 !important;
        }

        div.dt-container .dt-paging .dt-paging-button.current:hover {
            color: white !important;
            border: 1px solid transparent;
        }

        div.dt-container .dt-paging .dt-paging-button:hover {
            background: none !important;
            background-color: #4F46E5 !important;
            border: 1px solid transparent;
        }

        .child span {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- livewire:layout.navigation -->

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>

    <script>
        var datatable = new DataTable('#data-table', {
            responsive: true,
            pageLength: 5,
            language: {
                "lengthMenu": `<div class='text-sm text-gray-700'>Registros por página: ` +
                    `<select class='rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6'>
                        <option value='5'>5</option>
                        <option value='10'>10</option>
                        <option value='25'>25</option>
                        <option value='-1'>Todo</option>
                    </select>
                    </div>`,
                "zeroRecords": "No hay registros",
                "info": `<p class='text-sm text-gray-700'>Mostrando la página <span class='font-black'>_PAGE_</span> de <span class='font-black'>_PAGES_</span></p>`,
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": `<p class='text-sm text-gray-700'>Filtrado de <span class='font-black'>_MAX_</span> registros totales</p>`,
                "search": `<span class='text-sm text-gray-700'>Buscar: </span>`,
                "paginate": {
                    'next': `Siguiente`,
                    'previous': `Anterior`
                }
            },
            initComplete: function () {
                $('div.dt-search input').addClass('rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6')
            }
        })
    </script>
</body>

</html>