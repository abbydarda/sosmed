<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;
use App\Transformers\PhotoTransformer;

class ShowPhotos extends Controller
{
    public function __invoke(PhotoTransformer $transformer ,PhotoServiceInterface $service)
    {
      $result = $service->showphotos();
      $result = $transformer->TransformCollection($result);
      return response($result,200);
    }
}
