<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;
use App\Transformers\PhotoTransformer;

class UpdatePhotos extends Controller
{
    public function __invoke(PhotoTransformer $transformer,PhotoServiceInterface $service, Request $request, $id)
    {
      $result = $service->updatephoto($id, $request->all());
      $result = $transformer->TransformItem($result);
      return response($result,200);
    }
}
