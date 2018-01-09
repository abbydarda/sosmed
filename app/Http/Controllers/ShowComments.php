<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\CommentServiceInterface;
use App\Transformers\CommentTransformer;

class ShowComments extends Controller
{
    public function __invoke(CommentServiceInterface $service, CommentTransformer $transformer)
    {
      if (!request('postId')) {
        $data = $service->ShowComments();
        $data = $transformer->TransformCollection($data);
        return response($data,200);
      }else {
        $postId = request('postId');
        $data = $service->ShowCommentsbyPostId($postId);
        $data = $transformer->TransformCollection($data);
        return response($data,200);
      }
    }
}
