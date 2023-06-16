<x-app-layout>
    <div>
        <p>search here </p>
        <div class="form-group" style="width: 500px">
            <input type="text" id="search" name="search" placeholder="search" class="form-control" />
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        var route = "{{ url('autocomplete-search') }}";
        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>
</x-app-layout>
