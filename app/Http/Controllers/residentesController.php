<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Characters;
class residentesController extends Controller
{

    public function __construct()
    {


    }


    public function index()
    {
        $url = env('URL_SERVER_API', 'https://rickandmortyapi.com');
        $response = Http::get($url);
        $data= $response->json();
        return view('residentes', compact('data'));
        
    }

    public function store(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $status = $request->input('status');
        $species = $request->input('species');


        $characters = new Characters;
        $characters->id = $id;
        $characters->name = $name;
        $characters->status = $status;
        $characters->species = $species;
    
        $characters->save();
    
        return redirect()->back()->with('success', 'Character saved successfully');
    }
}