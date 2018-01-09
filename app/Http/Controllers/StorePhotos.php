<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;
use App\Transformers\PhotoTransformer;

class StorePhotos extends Controller
{
    public function __invoke(PhotoTransformer $transformer,PhotoServiceInterface $service, Request $request)
    {
      $result = $service->storephoto($request->all());
      $result = $transformer->TransformItem($result);
      return response($result,201);
    }
}
