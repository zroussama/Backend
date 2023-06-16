<div class="p-6 lg:p-8 bg-white border-b border-gray-200">

    <!-- component -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto">
        <form method="post" class="flex items-center">
            <div class="autocomplete-container" style="width:300px;">
                <input type="text" id="intuitive-search" name="intuitive-search" placeholder="Recherche">
            </div>
            <input type="submit" name="submit">
        </form>
            {{-- <label for="simple-search" class="sr-only">Tapez pour chercher...</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search" required>
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                    class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg></button>
        </form> --}}

        {{-- search script  --}}
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function(){
                $("#intuitive-search").autocomplete({
                    source: '/autocomplete'
                });
            });
        </script>
        {{-- script  --}}
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
</div>
{{-- Hidden  -  Les derniers visité  --}}
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8 hidden">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Historique de recherche</a>
            </h2>
        </div>
        <ul class="mt-4 text-gray-500 text-sm leading-relaxed">
            <li class="mb-2">Élément 1</li>
            <li class="mb-2">Élément 2</li>
            <li class="mb-2">Élément 3</li>
            <li class="mb-2">Élément 4</li>
        </ul>
    </div>

    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="w-6 h-6 stroke-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                Récemment visité
            </h2>
        </div>

        <ul class="mt-4 text-gray-500 text-sm leading-relaxed">
            <li class="mb-2">Élément 1</li>
            <li class="mb-2">Élément 2</li>
            <li class="mb-2">Élément 3</li>
            <li class="mb-2">Élément 4</li>
        </ul>

    </div>
</div>
