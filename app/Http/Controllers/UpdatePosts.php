<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PostServiceInterface;
use App\Transformers\PostTransformer;

class UpdatePosts extends Controller
{
  public function __invoke(PostServiceInterface $service, PostTransformer $transformer,Request $request,$id)
  {
    $result = $service->UpdatePosts($id, $request->all());
    $result = $transformer->TransformItem($result);
    return response($result,200);
  }
}
