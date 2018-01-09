<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\CommentServiceInterface;
use App\Transformers\CommentTransformer;

class ShowCommentsbyId extends Controller
{
    public function __invoke(CommentServiceInterface $service, CommentTransformer $transformer, $id)
    {
      $data = $service->ShowCommentsbyId($id);
      $data = $transformer->TransformItem($data);
      return response($data,200);
    }
}
