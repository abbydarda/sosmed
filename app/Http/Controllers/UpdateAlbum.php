<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Transformers\AlbumTransformer;

class UpdateAlbum extends Controller
{
    public function __invoke($id, AlbumServiceInterface $service, AlbumTransformer $transformer, Request $request)
    {
      $data = $service->updatealbum($id,$request->all());
      $data = $transformer->TransformItem($data);
      return response($data,200);
    }
}
