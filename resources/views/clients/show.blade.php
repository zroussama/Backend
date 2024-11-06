<x-app-layout>
    {{-- header --}}
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
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="/clients"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Liste
                            des Clients</a>
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
                        <span
                            class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">{{ $client->entreprise }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>
    {{-- list container --}}

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">

        {{-- Liste classique  --}}


        {{-- Card  --}}
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="px-4 sm:px-0">
                    <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Information
                    </h3>
                    <p class="max-w-2xl mt-1 text-sm leading-6 text-gray-500">Personal details and application.</p>
                </div>
                <div class="mt-6 border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Entreprise</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $client->entreprise }}!</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Adresse</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $client->entreprise }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Ville</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $client->ville }}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Pays</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $client->pays }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Télephone</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $client->tel }}
                            </dd>
                        </div>
                        <div class="border-t border-gray-200" /> {{-- Ligne border decomposé --}}
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Portfolio</dt>
                            <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                <ul role="list" class="border border-gray-200 divide-y divide-gray-100 rounded-md">
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex items-center flex-1 w-0">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="false">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex flex-1 min-w-0 gap-2 ml-4">
                                               <span class="font-medium truncate">Kbis_Comunik.pdf</span>
                                                <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ml-4">
                                            <a href="#"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex items-center flex-1 w-0">
                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex flex-1 min-w-0 gap-2 ml-4">
                                                <span
                                                    class="font-medium truncate">coverletter_back_end_developer.pdf</span>
                                                <span class="flex-shrink-0 text-gray-400">4.5mb</span>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0 ml-4">
                                            <a href="#"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    {{-- Information Client statique --}}




    {{-- Information Client statique --}}

    {{-- Information Client C O N N E X I O N S --}}

    {{-- Information Client C O N N E X I O N S --}}




    {{-- List contact --}}
    <div>
        <div class="container px-4 mx-auto sm:px-6 lg:px-8">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($client as $client)
                    <li
                        class="flex flex-col col-span-1 text-center bg-white divide-y divide-gray-200 rounded-lg shadow">
                        <div class="flex flex-col flex-1 p-8">
                            <img class="flex-shrink-0 w-12 h-12 mx-auto rounded-full"
                                src="https://api-private.atlassian.com/users/9cea692d0a59c5e100680165cbbeb496/avatar"
                                alt="">


                            <h3 class="mt-6 text-sm font-medium text-gray-900">employé n°1</h3>
                            <dl class="flex flex-col justify-between flex-grow mt-1">
                                <div class="flex flex-row">
                                    <dt class="sr-only">Role</dt>
                                    <dd class="text-sm text-gray-500">Gérant</dd>
                                </div>
                            </dl>
                            <dl class="flex flex-col justify-between flex-grow mt-1">
                                <dt class="sr-only">role</dt>
                                <dd class="text-sm text-gray-500">Gérant</dd>
                                <dt class="sr-only">Role</dt>
                                <dd class="mt-3">
                                    <span
                                        class="inline-flex items-center px-2 py-1 text-xs font-medium text-green-700 rounded-full bg-green-50 ring-1 ring-inset ring-green-600/20">
                                        role
                                    </span>
                                </dd>
                            </dl>
                        </div>
                        <div>
                            <div class="flex -mt-px divide-x divide-gray-200">
                                <div class="flex flex-1 w-0">
                                    <a href="mailto:oussama.zribi@esprit.tn"
                                        class="relative inline-flex items-center justify-center flex-1 w-0 py-4 -mr-px text-sm font-semibold text-gray-900 border border-transparent rounded-bl-lg gap-x-3">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 10l7-5 7 5M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z" />
                                        </svg>
                                        Email
                                    </a>
                                </div>
                                <div class="flex flex-1 w-0 -ml-px">
                                    <a href="tel: 62651165"
                                        class="relative inline-flex items-center justify-center flex-1 w-0 py-4 text-sm font-semibold text-gray-900 border border-transparent rounded-br-lg gap-x-3">
                                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M22 11.08v-.18c0-2.5-1.94-4.78-4.43-4.78-1.19 0-2.32.47-3.16 1.31l-3.19 3.19a.78.78 0 0 0-.22.59v3.98c0 .42.35.77.77.77h.63c1.25 0 2.26-1.01 2.26-2.26v-.82c0-.42-.34-.77-.76-.77-.84 0-1.53-.68-1.53-1.53v-3.11c0-.42-.34-.77-.77-.77H5.79c-.42 0-.77.34-.77.76v11.05c0 .42.34.76.77.76h2.43c.42 0 .77-.34.77-.76v-.63c0-1.25 1.01-2.26 2.26-2.26h3.98c1.25 0 2.26 1.01 2.26 2.26v3.98c0 .42.34.76.76.76h.82c.85 0 1.53-.68 1.53-1.53v-3.19c0-.21-.09-.41-.22-.59l-3.19-3.19c-.84-.84-1.96-1.31-3.16-1.31-2.49 0-4.43 2.28-4.43 4.78v.18c0 .42.34.77.77.77h15.46c.42 0 .77-.34.77-.77z" />
                                        </svg>
                                        Call
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</x-app-layout>
