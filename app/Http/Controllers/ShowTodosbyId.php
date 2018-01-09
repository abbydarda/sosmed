<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\TodoServiceInterface;
use App\Transformers\TodoTransformer;

class ShowTodosbyId extends Controller
{
  public function __invoke(TodoServiceInterface $service, TodoTransformer $transformer,$id)
  {
    $result = $service->ShowTodosbyId($id);
    $result = $transformer->TransformItem($result);
    return response($result,200);
  }
}
