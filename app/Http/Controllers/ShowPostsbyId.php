<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PostServiceInterface;
use App\Transformers\PostTransformer;

class ShowPostsbyId extends Controller
{
    public function __invoke(PostServiceInterface $service, PostTransformer $transformer,$id)
    {
      $result = $service->ShowPostsbyId($id);
      $result = $transformer->TransformItem($result);
      return response($result,200);
    }
}
