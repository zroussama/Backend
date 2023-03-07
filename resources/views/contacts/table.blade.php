<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="contacts-table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Fonction</th>
                <th>Tel1</th>
                <th>Tel2</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->nom }}</td>
                    <td>{{ $contact->prenom }}</td>
                    <td>{{ $contact->fonction }}</td>
                    <td>{{ $contact->tel1 }}</td>
                    <td>{{ $contact->tel2 }}</td>
                    <td>{{ $contact->email }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('contacts.show', [$contact->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('contacts.edit', [$contact->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $contacts])
        </div>
    </div>
</div>
