<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nouveau Client
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('clients.store') }}">
                    @csrf

                    <div class="shadow overflo,,;olpw-hidden sm:rounded-md">
                        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <x-form-section submit="updateClientInformation">
                                <x-slot name="title">
                                    {{ __('Client Information :entreprise', ['entreprise' => $client->entreprise]) }}
                                </x-slot>

                                <x-slot name="description">
                                    {{ __('Mettez à jour les informations de client ') }}
                                </x-slot>
                                <div class="block mt-8">
                                    <a href="{{ route('clients.index') }}"
                                        class="px-4 py-2 font-bold text-black bg-gray-200 rounded hover:bg-gray-300">Back to list</a>
                                </div>
                                <x-slot name="form">






                                    <!-- Entreprise -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <x-label for="entreprise" value="{{ __('Entreprise') }}" />
                                        <x-input id="entreprise" placeholder="{{ $client->entreprise }}" type="text"
                                            class="block w-full mt-1" wire:model.defer="state.entreprise" autocomplete="entreprise" />
                                        <x-input-error for="entreprise" class="mt-2" />
                                    </div>

                                    <!-- Adresse -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <x-label for="adresse" value="{{ __('Adresse') }}" />
                                        <x-input id="adresse" placeholder="{{ $client->adresse }}" type="text"
                                            class="block w-full mt-1" wire:model.defer="state.adresse" autocomplete="adresse" />
                                        <x-input-error for="adresse" class="mt-2" />
                                    </div>

                                    <!-- Ville -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <x-label for="ville" value="{{ __('Ville') }}" />
                                        <x-input id="ville" placeholder="{{ $client->ville }}" type="text"
                                            class="block w-full mt-1" wire:model.defer="state.ville" autocomplete="ville" />
                                        <x-input-error for="ville" class="mt-2" />
                                    </div>

                                    <!-- Pays -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <x-label for="pays" value="{{ __('Pays') }}" />
                                        <x-input id="pays" placeholder="{{ $client->pays }}" type="text"
                                            class="block w-full mt-1" wire:model.defer="state.pays" autocomplete="pays" />
                                        <x-input-error for="pays" class="mt-2" />
                                    </div>

                                    <!-- Tel -->
                                    <div class="col-span-6 sm:col-span-4">
                                        <x-label for="tel" value="{{ __('Tél') }}" />
                                        <x-input id="tel" placeholder="{{ $client->tel }}" type="text"
                                            class="block w-full mt-1" wire:model.defer="state.tel" autocomplete="tel" />
                                        <x-input-error for="tel" class="mt-2" />
                                    </div>

                                </x-slot>

                                <x-slot name="actions">
                                    <x-button>
                                        {{ __('Retour') }}
                                    </x-button>

                                    <x-button>
                                        {{ __('Sauvegarder') }}
                                    </x-button>
                                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                            Create
                                        </button>
                                    </div>

                                </x-slot>
                                <div class="border-t border-gray-200" /> {{-- Ligne border decomposé --}}
                            </x-form-section>
                        </div>
                        <div class="hidden px-4 py-5 bg-white sm:p-6">

                            <label for="entreprise" class="block font-medium text-sm text-gray-700">entreprise</label>
                            <input type="text" name="entreprise" id="entreprise" type="text"
                                class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('entreprise', '') }}" />
                            @error('entreprise')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
