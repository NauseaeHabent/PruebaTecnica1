<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Contracts\CharacterServiceInterface;
use App\Models\Characters;
class residentesController extends Controller
{

    

    private $characterService;

    public function __construct(CharacterServiceInterface $characterService) {
        $this->characterService = $characterService;
    }


    public function index()
    {
        $url = env('URL_SERVER_API', 'https://rickandmortyapi.com');
        $response = Http::get($url);
        $data= $response->json();
        return view('residentes', compact('data'));
        
    }
    public function store(Request $request) {
        $id = $request->input('id');
        $name = $request->input('name');
        $status = $request->input('status');
        $species = $request->input('species');

        $this->characterService->saveCharacter($id, $name, $status, $species);

        return redirect()->back();
    }

    public function show() {
        $savedCharacters = Characters::all(); 
        return view('personajesVista', compact('savedCharacters'));
    }
}

