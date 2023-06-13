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
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <a href="/dashboard"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Liste
                            des
                            Clients</a>
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

    <div>
        <div class="max-w-4xl py-10 mx-auto sm:px-6 lg:px-8">

            <x-slot name="title">
                {{ __('Client Information :entreprise', ['entreprise' => $client->entreprise]) }}
            </x-slot>

            <x-slot name="description">
                {{ __('Mettez à jour les informations de client ') }}
            </x-slot>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('clients.update', $client->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="overflow-hidden shadow sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="entreprise" class="block text-sm font-medium text-gray-700">Entreprise</label>
                            <input type="text" name="entreprise" id="entreprise" type="text"
                                class="block w-full mt-1 rounded-md shadow-sm form-input"
                                value="{{ old('entreprise', $client->entreprise) }}" />
                            @error('entreprise')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tag" class="block text-sm font-medium text-gray-700">tag</label>
                            <input type="text" name="tag" id="tag" type="text" class="block w-full mt-1 rounded-md shadow-sm form-input"
                                   value="{{ old('tag', $client->tag) }}" />
                            @error('tag')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tel" class="block text-sm font-medium text-gray-700">tel</label>
                            <input type="text" name="tel" id="tel" type="text"
                                class="block w-full mt-1 rounded-md shadow-sm form-input"
                                value="{{ old('tel', $client->tel) }}" />
                            @error('tel')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="adresse" class="block text-sm font-medium text-gray-700">adresse</label>
                            <input type="text" name="adresse" id="adresse" type="text" class="block w-full mt-1 rounded-md shadow-sm form-input"
                                   value="{{ old('adresse', $client->adresse) }}" />
                            @error('adresse')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="ville" class="block text-sm font-medium text-gray-700">ville</label>
                            <input type="text" name="ville" id="ville" type="text" class="block w-full mt-1 rounded-md shadow-sm form-input"
                                   value="{{ old('ville', $client->ville) }}" />
                            @error('ville')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pays" class="block text-sm font-medium text-gray-700">pays</label>
                            <input type="text" name="pays" id="pays" type="text" class="block w-full mt-1 rounded-md shadow-sm form-input"
                                   value="{{ old('pays', $client->pays) }}" />
                            @error('pays')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-end px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                                Confirmer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="border-t border-gray-200" />
    </div>
</x-app-layout>
