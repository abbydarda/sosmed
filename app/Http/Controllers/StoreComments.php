<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\CommentServiceInterface;
use App\Transformers\CommentTransformer;

class StoreComments extends Controller
{
    public function __invoke(CommentServiceInterface $service, CommentTransformer $transformer, Request $request)
    {
      $data = $service->StoreComments($request->all());
      $data = $transformer->TransformItem($data);
      return response($data,201);
    }
}
