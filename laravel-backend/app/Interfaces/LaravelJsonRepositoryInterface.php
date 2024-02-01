<?php

namespace App\Interfaces;

interface LaravelJsonRepositoryInterface 
{
    public function getAllLaravelJsons();
    public function getLaravelJsonById($laravelJsonId);
    public function deleteLaravelJson($laravelJsonId);
    public function createLaravelJson(array $laravelJsonDetails);
    public function updateLaravelJson($laravelJsonId, array $newDetails);
}