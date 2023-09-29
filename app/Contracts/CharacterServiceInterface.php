<?php


namespace App\Contracts;

interface CharacterServiceInterface {
    public function saveCharacter($id, $name, $status, $species);
}