<x-app-layout>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contacts</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right" href="{{ route('contacts.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('contacts.table')
        </div>
    </div>


    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($contacts as $person)
            <li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow">
                <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-full"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                        alt="">
                    <h3 class="mt-6 text-sm font-medium text-gray-900">{{ $person['nom'] }}</h3>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                        <dt class="sr-only">Title</dt>
                        <dd class="text-sm text-gray-500">{{ $person['prenom'] }}</dd>
                        <dt class="sr-only">Role</dt>
                        <dd class="mt-3">
                            <span
                                class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                {{ $person['fonction'] }}
                            </span>
                        </dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-gray-200">
                        <div class="flex w-0 flex-1">
                            <a href="mailto:{{ $person['email'] }}"
                                class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 10l7-5 7 5M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Email
                            </a>
                        </div>
                        <div class="-ml-px flex w-0 flex-1">
                            <a href="tel:{{ $person['tel1'] }}"
                                class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 22c5.523 0 10-4.477 10-10V12a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-2.42-2.42a1 1 0 00-1.414 0l-2.12 2.12a1 1 0 01-1.414 0l-2.12-2.12a1 1 0 00-1.414 0L3 7.293A1 1 0 012.707 7H1a2 2 0 00-2 2v8c0 5.523 4.477 10 10 10zm0 0V12" />
                                </svg>
                                Call
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    ________________________________________________________________

    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    <!--
        Include Tailwind JIT CDN compiler
        More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
        -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>


    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                    <div
                        class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-200 shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0">
                        @foreach ($contacts as $actionIdx => $contact)
                            <div key="{{ $contact['nom'] }}"
                                class="{{ $actionIdx === 0 ? 'rounded-tl-lg rounded-tr-lg sm:rounded-tr-none' : '' }}
                                   {{ $actionIdx === 1 ? 'sm:rounded-tr-lg' : '' }}
                                   {{ $actionIdx === count($contacts) - 2 ? 'sm:rounded-bl-lg' : '' }}
                                   {{ $actionIdx === count($contacts) - 1 ? 'rounded-bl-lg rounded-br-lg sm:rounded-bl-none' : '' }}
                                   group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                                <div>
                                    <span class="{{ $contact['iconBackground'] }} {{ $contact['iconForeground'] }} inline-flex rounded-lg p-3 ring-4 ring-white">
                                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" class="h-6 w-6" alt="" aria-hidden="true" />
                                    </span>

                                </div>
                                <div class="mt-8">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900">
                                        <a href="{{ $contact['href'] }}" class="focus:outline-none">
                                            {{-- Extend touch target to entire panel --}}
                                            <span class="absolute inset-0" aria-hidden="true"></span>
                                            {{ $contact['nom'] }}
                                        </a>
                                    </h3>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit
                                        repellendus qui ut at blanditiis et quo et molestiae.
                                    </p>
                                </div>
                                <span
                                    class="pointer-events-none absolute right-6 top-6 text-gray-300 group-hover:text-gray-400"
                                    aria-hidden="true">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
                                    </svg>
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
