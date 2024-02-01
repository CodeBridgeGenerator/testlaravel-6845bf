<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\LaravelJson;
use App\Interfaces\LaravelJsonRepositoryInterface;
use App\Http\Requests\CreateLaravelJsonRequest;

class LaravelJsonController extends Controller
{
    private LaravelJsonRepositoryInterface $userRepository;

    public function __construct(LaravelJsonRepositoryInterface $userRepository) 
    {
        $this->LaravelJsonRepository = $userRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->LaravelJsonRepository->getAllLaravelJsons()
        ]);
    }

    public function store(CreateLaravelJsonRequest $request): JsonResponse 
    {
        $user = LaravelJson::create($request->validated());
        return response()->json(['message' => 'LaravelJson created successfully']);
    }

}
