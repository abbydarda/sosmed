<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PostServiceInterface;
use App\Transformers\CommentTransformer;

class ShowPostsCommentsbypostId extends Controller
{
  public function __invoke(PostServiceInterface $service, CommentTransformer $transformer,$postId)
  {
    $result = $service->ShowPostsCommentsbyPostId($postId);
    $result = $transformer->TransformCollection($result);
    return response($result,200);
  }
}
