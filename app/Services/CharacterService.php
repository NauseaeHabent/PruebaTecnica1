<?php



namespace App\Services;

use App\Contracts\CharacterServiceInterface;
use App\Models\Characters;

class CharacterService implements CharacterServiceInterface {
    public function saveCharacter($id, $name, $status, $species) {
        $character = new Characters;
        $character->id = $id;
        $character->name = $name;
        $character->status = $status;
        $character->species = $species;

        $character->save();
    }
}