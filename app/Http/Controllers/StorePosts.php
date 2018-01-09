<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PostServiceInterface;
use App\Transformers\PostTransformer;

class StorePosts extends Controller
{
  public function __invoke(PostServiceInterface $service, PostTransformer $transformer,Request $request)
  {
    $result = $service->StorePosts($request->all());
    $result = $transformer->TransformItem($result);
    return response($result,201);
  }
}
