<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Transformers\AlbumTransformer;

class ShowAlbumbyId extends Controller
{
    public function __invoke($id,AlbumServiceInterface $service, AlbumTransformer $transformer)
    {
      $data = $service->showalbumbyid($id);
      $data = $transformer->TransformItem($data);
      return response($data,200);
    }
}
