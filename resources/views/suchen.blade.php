<!DOCTYPE html>
<html>
<head>
    <title>Laravel Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Simple Search</h3><br>
                <form action="{{ route('simple_search') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type the name" aria-describedby="basic-addon2" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <form action="{{ route('advance_search') }}" method="GET">
                    <h3>Advanced Search</h3><br>
                    <input type="text" name="entreprise" class="form-control" placeholder="Enterprize name"><br>
                    <input type="text" name="ville" class="form-control" placeholder="City name"><br>
                    <input type="text" name="pays" class="form-control" placeholder="Country name"><br>
                    <input type="text" name="tel" class="form-control" placeholder="Telephone"><br>
                    <h5>Contacts</h5>
                    <input type="text" name="email" class="form-control" placeholder="Email"><br>
                    <input type="text" name="fonction" class="form-control" placeholder="Function"><br>
                    <input type="text" name="nom" class="form-control" placeholder="Last name"><br>
                    <input type="text" name="prenom" class="form-control" placeholder="First name"><br>
                    <input type="text" name="tel1" class="form-control" placeholder="Mobile"><br>
                    <input type="submit" value="Search" class="btn btn-secondary">
                </form>
            </div>
            <div class="col-md-8">
                <h3>List of Clients</h3>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Enterprise</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Telephone</th>
                    </tr>
                    @foreach($data as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->entreprise }}</td>
                        <td>{{ $client->ville }}</td>
                        <td>{{ $client->pays }}</td>
                        <td>{{ $client->tel }}</td>
                    </tr>
                    @endforeach
                </table>
                {{ $data->appends(request()->except('page'))->links() }}

                <h3>List of Contacts</h3>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Function</th>
                        <th>Last name</th>
                        <th>First name</th>
                        <th>Mobile</th>
                    </tr>
                    @foreach($data1 as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->fonction }}</td>
                        <td>{{ $contact->nom }}</td>
                        <td>{{ $contact->prenom }}</td>
                        <td>{{ $contact->tel1 }}</td>
                    </tr>
                    @endforeach
                </table>
                {{ $data1->appends(request()->except('page'))->links() }}
            </div>
        </div>
    </div>
</body>
</html>
