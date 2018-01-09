<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;
use App\Transformers\PhotoTransformer;

class ShowPhotos extends Controller
{
    public function __invoke(PhotoTransformer $transformer ,PhotoServiceInterface $service)
    {
      if (!request('albumId')) {
        $result = $service->showphotos();
        $result = $transformer->TransformCollection($result);
        return response($result,200);
      }else{
        $albumId=request('albumId');
        $result = $service->showphotobyalbumid($albumId);
        $result = $transformer->TransformCollection($result);
        return response($result,200);
      }
    }
}
