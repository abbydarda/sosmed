<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Album;
use App\Transformers\AlbumTransformer;

class ShowAlbums extends Controller
{
    public function __invoke(AlbumTransformer $transformer ,AlbumServiceInterface $service, Album $album)
    {
      $data = $service->showalbums($album);
      $data = $transformer->TrasnsformCollection($data);
      return response($data,200);
    }
}
