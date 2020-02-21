<?php
declare(strict_types = 1);

namespace App\Services;

use App\Repositories\AuthorRepository;

class AuthorService {

    private $repository;

    public function __construct(AuthorRepository $repository)
    { 
      $this->repository = $repository;  
    }

    public function index()
    {
        return $this->repository->paginate();
    }

    public function store(Request $request)
    {
       return $this->repository->create($request->all());
    }

    public function show(int $id)
    {
        return $this->repository->find($id);
    }


    public function update(Request $request, int $id)
    {
        $model = $this->repository->findId($id);
        $model->fill($request->all());
        return $model->save();
    }


    public function destroy(int $id)
    {
        $model = $this->repository->find($id);
        $model->delete();

        return response()->noContent();
    }

}