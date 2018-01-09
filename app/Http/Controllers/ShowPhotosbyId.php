<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;

class ShowPhotosbyId extends Controller
{
    public function __invoke($id, PhotoServiceInterface $service)
    {
      $result = $service->showphotobyid($id);
      // $result = $transformer->TransformItem($result);
      return response($result,200);
    }
}
