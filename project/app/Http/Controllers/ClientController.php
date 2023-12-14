<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::paginate(7);
        // $clients = Client::all();
        return view('pages.clients', compact('clients'));
    }
}
