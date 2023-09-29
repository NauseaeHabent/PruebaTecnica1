<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
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
        try{
        $id = $request->input('id');
        $name = $request->input('name');
        $status = $request->input('status');
        $species = $request->input('species');

        $this->characterService->saveCharacter($id, $name, $status, $species);
        return redirect()->back();
    }
    catch (QueryException $e) {
        if ($e->errorInfo[1] == 1062) { //error de llave primaria duplicada 
            return redirect()->back()->with('error', 'Duplicado, este personaje ya existe en la DB');
        } else { //error desconocido
            return redirect()->back()->with('error', 'Un error sucedio en la DB');
        }
        
    }}

    public function show() {
        $savedCharacters = Characters::all(); 
        return view('personajesVista', compact('savedCharacters'));
    }
}

