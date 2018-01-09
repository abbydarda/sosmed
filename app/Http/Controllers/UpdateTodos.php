<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\TodoServiceInterface;
use App\Transformers\TodoTransformer;

class UpdateTodos extends Controller
{
  public function __invoke(TodoServiceInterface $service, TodoTransformer $transformer,Request $request,$id)
  {
    $result = $service->UpdateTodos($id,$request->all());
    $result = $transformer->TransformItem($result);
    return response($result,200);
  }
}
