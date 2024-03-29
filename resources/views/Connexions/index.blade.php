@include('sweetalert::alert')
<x-app-layout>
    <x-slot name="header">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
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
                        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Liste de
                            connexion des clients</span>
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
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('clients.create') }}"
                    class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center border rounded-full text-primary hover:bg-primary border-primary bg-green hover:text-white">
                    <span class="mr-[10px]">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            width="20" height="20">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" stroke="gray" />
                        </svg>
                    </span>
                    Nouvelle connexion pour client
                </a>


            </div>

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-8 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="w-full min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Entreprise
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            hebergement
                                        </th>
                                        <th scope="col" width="50"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            type
                                        </th>
                                        <th scope="col" width="50"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            link
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            ip_wan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            ip_lan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            username
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            password
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Token
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50">
                                            Options
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($connexions as $connexion)
                                        <tr>
                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->id }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->name }}
                                            </td>
                                            <td class="justify-center px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                @if ($connexion->TYPE_HEBERGEMENT === 'CLOUD')
                                                    <div class="flex items-center justify-center">
                                                        <svg class="w-8 h-8 text-teal-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" /></svg>                                                    </div>
                                                @elseif ($connexion->TYPE_HEBERGEMENT === 'ONPREMISE')
                                                    <div class="flex items-center justify-center">
                                                        <svg class="w-8 h-8 text-teal-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M22.61 16.95A5 5 0 0 0 18 10h-1.26a8 8 0 0 0-7.05-6M5 5a8 8 0 0 0 4 15h9a5 5 0 0 0 1.7-.3" />
                                                            <line x1="1" y1="1" x2="23" y2="23" />
                                                        </svg>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->ONPREMISE_CASE }}
                                            </td>
                                            {{-- Todo : modifier les icons de l'etats des clients --}}
                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                <span
                                                    class="
                                                    inline-flex items-center justify-center h-6 w-6 rounded-full
                                                    {{ $connexion->status === 1 ? 'bg-green-500' : '' }}
                                                    {{ $connexion->status === 0 ? 'bg-yellow-500' : '' }}
                                                ">
                                                    <svg class="w-4 h-4 fill-current " viewBox="0 0 20 20">
                                                        <circle cx="10" cy="10" r="9" />
                                                    </svg>
                                                </span>
                                                <span class="ml-2"></span>
                                            </td>


                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->link }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->ip_wan }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->ip_lan }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->username }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->password }}
                                            </td>

                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                {{ $connexion->rememberToken }}
                                            </td>


                                            <td
                                                class="flex items-center justify-center px-6 py-4 text-sm font-medium whitespace-nowrap">
                                                <a href="{{ route('connexions.show', $connexion->id) }}"
                                                    class="mb-2 mr-2 text-blue-600 hover:text-blue-900">
                                                    Voir</a>
                                                <a href="{{ route('connexions.edit', $connexion->id) }}"
                                                    class="mb-2 mr-2 text-indigo-600 hover:text-indigo-900">
                                                    Modifier</a>
                                                <form class="inline-block"
                                                    action="{{ route('connexions.destroy', $connexion->id) }}"
                                                    method="POST" onsubmit="return confirm('Êtes-vous sûr/e?');">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token"
                                                        value="{{ csrf_token() }}">
                                                    <input type="submit"
                                                        class="mb-2 mr-2 text-red-600 hover:text-red-900"
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
                                                class="items-center justify-between flex-auto px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                                                <div class="flex justify-between flex-1 sm:hidden">
                                                    <a href="{{ $connexions->previousPageUrl() }}"
                                                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Previous</a>
                                                    <a href="{{ $connexions->nextPageUrl() }}"
                                                        class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Next</a>
                                                </div>
                                                <div
                                                    class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                                    <div>
                                                        <p class="text-sm text-gray-700">
                                                            Showing
                                                            <span
                                                                class="font-medium">{{ $connexions->firstItem() }}</span>
                                                            to
                                                            <span
                                                                class="font-medium">{{ $connexions->lastItem() }}</span>
                                                            of
                                                            <span
                                                                class="font-medium">{{ $connexions->total() }}</span>
                                                            results
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <nav class="inline-flex rounded-md shadow-sm isolate"
                                                            aria-label="Pagination">
                                                            <a href="{{ $connexions->previousPageUrl() }}"
                                                                class="relative inline-flex items-center px-2 py-2 text-gray-400 rounded-l-md ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                                <span class="sr-only">Previous</span>
                                                                <svg class="w-5 h-5" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </a>
                                                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                                                            @foreach ($connexions as $connexion)
                                                                <a href="#"
                                                                    class="relative inline-flex items-center {{ $loop->first ? 'bg-indigo-600 text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600' : 'text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0' }}">{{ $connexion->id }}</a>
                                                            @endforeach
                                                            <a href="{{ $connexions->nextPageUrl() }}"
                                                                class="relative inline-flex items-center px-2 py-2 text-gray-400 rounded-r-md ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                                                <span class="sr-only">Next</span>
                                                                <svg class="w-5 h-5" viewBox="0 0 20 20"
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.icon-table').hover(function() {
                    var tag = $(this).data('tag');
                    $(this).attr('title', tag);
                });
            });
        </script>

</x-app-layout>
