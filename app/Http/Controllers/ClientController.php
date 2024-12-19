<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\DataTables\ClientsDataTable;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;



class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render('clients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {

        Client::create($request->validated());

        return redirect()->route('clients.index')->with('success', 'New client created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->validated());

        return redirect()->route('clients.index')->with('success', 'New client updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'New client deleted successfully.');
    }
}
