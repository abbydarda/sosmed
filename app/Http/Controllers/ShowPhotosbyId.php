<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;
use App\Transformers\PhotoTransformer;

class ShowPhotosbyId extends Controller
{
    public function __invoke($id, PhotoServiceInterface $service, PhotoTransformer $transformer)
    {
      $result = $service->showphotobyid($id);
      $result = $transformer->TransformItem($result);
      return response($result,200);
    }
}
