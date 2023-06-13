<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients'));
    }
    public function create()
    {
        $client = new Client;
        Alert::success('Success Title', 'Client created successfully.');
        return view('clients.create', compact('client'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'entreprise' => 'required',
            'pays' => 'required'
        ]);
        Client::create($request->all());
        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->validated());
        return redirect()->route('clients.index');
    }
    public function destroy(Client $client)
    {
        $client->delete();
        Alert::question('Question Title', 'Question Message');
        return redirect()->route('clients.index');
    }
}
