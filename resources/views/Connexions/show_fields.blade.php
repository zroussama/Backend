<!-- Idconnexion Field -->
<div class="col-sm-12">
    {!! Form::label('idConnexion', 'Idconnexion:') !!}
    <p>{{ $connexion->idConnexion }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $connexion->name }}</p>
</div>

<!-- Domain Field -->
<div class="col-sm-12">
    {!! Form::label('domain', 'Domain:') !!}
    <p>{{ $connexion->domain }}</p>
</div>

<!-- Port Field -->
<div class="col-sm-12">
    {!! Form::label('port', 'Port:') !!}
    <p>{{ $connexion->port }}</p>
</div>

<!-- Link Field -->
<div class="col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $connexion->link }}</p>
</div>

<!-- Username Field -->
<div class="col-sm-12">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $connexion->username }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $connexion->password }}</p>
</div>

<!-- Remembertoken Field -->
<div class="col-sm-12">
    {!! Form::label('rememberToken', 'Remembertoken:') !!}
    <p>{{ $connexion->rememberToken }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $connexion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $connexion->updated_at }}</p>
</div>

