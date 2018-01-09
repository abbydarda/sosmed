<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PostServiceInterface;
use App\Transformers\PostTransformer;

class DeletePosts extends Controller
{
  public function __invoke(PostServiceInterface $service,$id)
  {
    $result = $service->DeletePosts($id);
    return response($result,200,['content-Type'=>'application/json']);
  }
}
