
<section class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1>
                Create Contact
                </h1>
            </div>
        </div>
    </div>
</section>

<div class="px-3 content">



    <div class="card">

        {!! Form::open(['route' => 'contacts.store']) !!}

        <div class="card-body">

            <div class="row">
                @include('contacts.fields')
            </div>

        </div>

        <div class="card-footer">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{{ route('contacts.index') }}" class="btn btn-default"> Cancel </a>
        </div>

        {!! Form::close() !!}

    </div>
</div>
