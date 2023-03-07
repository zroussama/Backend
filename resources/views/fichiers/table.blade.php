<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="fichiers-table">
            <thead>
            <tr>
                <th>Nomfichier</th>
                <th>Datefichier</th>
                <th>Idfichier</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($fichiers as $fichier)
                <tr>
                    <td>{{ $fichier->nomFichier }}</td>
                    <td>{{ $fichier->dateFichier }}</td>
                    <td>{{ $fichier->idFichier }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['fichiers.destroy', $fichier->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('fichiers.show', [$fichier->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('fichiers.edit', [$fichier->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $fichiers])
        </div>
    </div>
</div>
