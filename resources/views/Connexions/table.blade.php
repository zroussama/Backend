<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="connexions-table">
            <thead>
            <tr>
                <th>Idconnexion</th>
                <th>Name</th>
                <th>Domain</th>
                <th>Port</th>
                <th>Link</th>
                <th>Username</th>
                <th>Password</th>
                <th>Remembertoken</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($connexions as $connexion)
                <tr>
                    <td>{{ $connexion->idConnexion }}</td>
                    <td>{{ $connexion->name }}</td>
                    <td>{{ $connexion->domain }}</td>
                    <td>{{ $connexion->port }}</td>
                    <td>{{ $connexion->link }}</td>
                    <td>{{ $connexion->username }}</td>
                    <td>{{ $connexion->password }}</td>
                    <td>{{ $connexion->rememberToken }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['connexions.destroy', $connexion->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('connexions.show', [$connexion->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('connexions.edit', [$connexion->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $connexions])
        </div>
    </div>
</div>
