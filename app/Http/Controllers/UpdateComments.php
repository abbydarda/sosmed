<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\CommentServiceInterface;
use App\Transformers\CommentTransformer;

class UpdateComments extends Controller
{
  public function __invoke(CommentServiceInterface $service, CommentTransformer $transformer, Request $request, $id)
  {
    $data = $service->UpdateComments($id, $request->all());
    $data = $transformer->TransformItem($data);
    return response($data,200);
  }
}
