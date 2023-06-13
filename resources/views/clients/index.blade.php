@include('sweetalert::alert')
<x-app-layout>
    <x-slot name="header">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Accueil
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="/dashboard"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Tableau
                            de bord</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Liste des
                            Clients</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <!--
        Include Tailwind JIT CDN compiler
        More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
        -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('clients.create') }}"
                    class="text-primary hover:bg-primary border-primary inline-flex items-center justify-center rounded-full border bg-green py-3 px-6 text-center text-base font-medium hover:text-white">
                    <span class="mr-[10px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            width="20" height="20">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" stroke="gray" />
                        </svg>
                    </span>
                    Nouveau Client
                </a>


            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 w-full">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Entreprise
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Télephone
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Adresse
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ville
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pays
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $client->id }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $client->ville }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $client->tel }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $client->adresse }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $client->ville }}
                                            </td>


                                            <td class="px-2 py-1  w-12 h-10">

                                                <svg class="w-full h-full" viewBox="0 0 24 24">
                                                    @if ($client->pays == 'France')
                                                        <x-flag-country-fr />
                                                    @elseif ($client->pays == 'Espagne')
                                                        <x-flag-country-es />
                                                    @elseif ($client->pays == 'Allemagne')
                                                        <x-flag-country-de />
                                                    @elseif ($client->pays == 'Angleterre')
                                                        <x-flag-country-gb />
                                                    @elseif ($client->pays == 'Tunisie')
                                                        <x-flag-country-tn />
                                                    @elseif ($client->pays == 'Italie')
                                                        <x-flag-country-it />
                                                    @endif
                                                </svg>

                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center justify-center">
                                                <a href="{{ route('clients.show', $client->id) }}"
                                                    class="text-blue-600 hover:text-blue-900 mb-2 mr-2">
                                                    Voir</a>
                                                <a href="{{ route('clients.edit', $client->id) }}"
                                                    class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                                    Modifier</a>
                                                <form class="inline-block"
                                                    action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                                    onsubmit="return confirm('Êtes-vous sûr/e?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit"
                                                        class="text-red-600 hover:text-red-900 mb-2 mr-2"
                                                        value="Supprimer">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="8">
                                            <div
                                                class="flex-auto items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                                <div class="flex flex-1 justify-between sm:hidden">
                                                    <a href="{{ $clients->previousPageUrl() }}"
                                                        class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                                    <a href="{{ $clients->nextPageUrl() }}"
                                                        class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                                </div>
                                                <div
                                                    class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                                    <div>
                                                        <p class="text-sm text-gray-700">
                                                            Showing
                                                            <span
                                                                class="font-medium">{{ $clients->firstItem() }}</span>
                                                            to
                                                            <span
                                                                class="font-medium">{{ $clients->lastItem() }}</span>
                                                            of
                                                            <span class="font-medium">{{ $clients->total() }}</span>
                                                            results
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <nav class="isolate inline-flex rounded-md shadow-sm"
                                                            aria-label="Pagination">
                                                            <a href="{{ $clients->previousPageUrl() }}"
                                                                class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                                <span class="sr-only">Previous</span>
                                                                <svg class="h-5 w-5" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </a>
                                                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                                            @foreach ($clients as $client)
                                                                <a href="#"
                                                                    class="relative inline-flex items-center {{ $loop->first ? 'bg-indigo-600 text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600' : 'text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0' }}">{{ $client->id }}</a>
                                                            @endforeach
                                                            <a href="{{ $clients->nextPageUrl() }}"
                                                                class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                                <span class="sr-only">Next</span>
                                                                <svg class="h-5 w-5" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </a>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript">
            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        </script>

</x-app-layout>