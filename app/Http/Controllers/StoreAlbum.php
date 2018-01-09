<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Transformers\AlbumTransformer;
use App\Album;

class StoreAlbum extends Controller
{
    public function __invoke(AlbumServiceInterface $service, AlbumTransformer $transformer, Request $request)
    {
      $data = $service->storealbum($request->all());
      $data = $transformer->TransformItem($data);
      return response($data,201);
    }
}
