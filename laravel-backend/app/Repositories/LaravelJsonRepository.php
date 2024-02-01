<?php

namespace App\Repositories;

use App\Interfaces\LaravelJsonRepositoryInterface;
use App\Models\LaravelJson;
use App\Http\Resources\LaravelJsonResource;

class LaravelJsonRepository implements LaravelJsonRepositoryInterface 
{
    public function getAllLaravelJsons() 
    {
        $laravelJson = LaravelJson::all();
        return LaravelJsonResource::collection($laravelJson);
    }

    public function getLaravelJsonById($LaravelJsonId) 
    {
        $laravelJson = LaravelJson::findOrFail($LaravelJsonId);
        return LaravelJsonResource::collection($laravelJson);
    }

    public function deleteLaravelJson($LaravelJsonId) 
    {
        LaravelJson::destroy($LaravelJsonId);
    }

    public function createLaravelJson(array $LaravelJsonDetails) 
    {
        return LaravelJson::create($LaravelJsonDetails);
    }

    public function updateLaravelJson($LaravelJsonId, array $newDetails) 
    {
        $users = LaravelJson::whereId($LaravelJsonId)->update($newDetails);
        return LaravelJsonResource::collection($laravelJson);
    }

}