<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Transformers\AlbumTransformer;

class ShowAlbums extends Controller
{
    public function __invoke(AlbumTransformer $transformer ,AlbumServiceInterface $service)
    {
      if (!request('userId')) {
        $data = $service->showalbums();
        $data = $transformer->TrasnsformCollection($data);
        return response($data,200);
      }else {
        $userId=request('userId');
        $data = $service->showalbumbyuserid($userId);
        $data = $transformer->TrasnsformCollection($data);
        return response($data,200);
      }
    }
}
