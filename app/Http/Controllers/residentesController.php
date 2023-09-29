<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    public function show()
    {
      
    }
}