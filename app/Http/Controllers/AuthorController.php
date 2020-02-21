<?php

namespace App\Http\Controllers;

use App\Entyties\Author;
use Illuminate\Http\Request;
use App\Services\AuthorService;

class AuthorController extends Controller
{
    private $service;
    
    public function __construct(
        AuthorService $service
    )
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->index();
    }

    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    public function show(int $id)
    {
        return $this->service->show($id);
    }


    public function update(Request $request, int $id)
    {
        return $this->service->show($request, $id);
    }


    public function destroy(int $id)
    {
        return $this->service->destroy($id);
    }
}
