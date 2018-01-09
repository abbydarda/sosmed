<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PostServiceInterface;
use App\Transformers\PostTransformer;

class ShowPosts extends Controller
{
    public function __invoke(PostServiceInterface $service, PostTransformer $transformer)
    {
      if (!request('userId')) {
        $result = $service->ShowPosts();
        $result = $transformer->TransformCollection($result);
        return response($result,200);
      }else {
        $userId = request('userId');
        $result = $service->ShowPostsbyUserId($userId);
        $result = $transformer->TransformCollection($result);
        return response($result,200);
      }
    }
}
