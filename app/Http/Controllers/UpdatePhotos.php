<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;

class UpdatePhotos extends Controller
{
    public function __invoke(PhotoServiceInterface $service, Request $request, $id)
    {
      $result = $service->updatephoto($id, $request->all());
      // $result = $transformer->TransformItem($result);
      return response($result,200);
    }
}
