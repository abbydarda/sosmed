<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;

class StorePhotos extends Controller
{
    public function __invoke(PhotoServiceInterface $service, Request $request)
    {
      $result = $service->storephoto($request->all());
      // $result = $transformer->TransformItem($result);
      return response($result,201);
    }
}
