<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\TodoServiceInterface;
use App\Transformers\TodoTransformer;

class ShowTodos extends Controller
{
    public function __invoke(TodoServiceInterface $service, TodoTransformer $transformer)
    {
      if (!request('userId')) {
        $result = $service->ShowTodos();
        $result = $transformer->TransformCollection($result);
        return response($result,200);
      }else {
        $userId = request('userId');
        $result = $service->ShowTodosbyUserId($userId);
        $result = $transformer->TransformCollection($result);
        return response($result,200);
      }
    }
}
