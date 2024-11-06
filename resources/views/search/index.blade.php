<div class="container">
        <h1>Résultats de la recherche</h1>

        @if (isset($details) && $details->isNotEmpty())
            <p>Résultats pour la recherche : <strong>{{ $query }}</strong></p>

            <table>
                    <thead>
                        <tr>
                            {{-- <th>ID_CMK</th> --}}
                            <th>Entreprise</th>
                            <th>Téléphone</th>
                            <th>Option</th>
                            <!-- Ajoutez d'autres colonnes pour les détails spécifiques -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $result)
                        <tr>
                            {{-- <td>{{ $result->id }}</td> --}}
                            <td>{{ $result->entreprise }}</td>
                            <td>{{ $result->tel }}</td>
                            <td><button>voir plus</button></td>
                            <!-- Ajoutez d'autres colonnes pour les détails spécifiques -->
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            Found {{ count($details) }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        @else
            <p>Aucun résultat trouvé pour la recherche : <strong>{{ $query }}</strong></p>
        @endif
    </div>
    <!-- /.container -->
