<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->get();

        return view('admin.clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'logos.*' => 'required|file|image|max:2048'
        ]);

        foreach ($request->file('logos') as $logo) {
            $filePath = $logo->store('images', 'public');

            $client = new Client();
            $client->logo = $filePath;
            $client->save();
        }

        return redirect()->route('admin.clients.index')->with('success', 'Client logos uploaded successfully.');
    }

    public function destroy(Client $client)
    {
        Storage::disk('public')->delete($client->logo);

        $client->delete();

        return redirect()->route('admin.clients.index')->with('success', 'Client logo deleted successfully.');
    }
}
