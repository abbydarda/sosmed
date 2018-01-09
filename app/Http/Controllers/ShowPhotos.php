<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;

class ShowPhotos extends Controller
{
    public function __invoke(PhotoServiceInterface $service)
    {
      $result = $service->showphotos();
      // $result = $transformer->TransformCollection($result);
      return response($result,200);
    }
}
