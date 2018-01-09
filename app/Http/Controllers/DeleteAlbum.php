<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\AlbumServiceInterface;

class DeleteAlbum extends Controller
{
    public function __invoke($id,AlbumServiceInterface $service)
    {
      $data = $service->deletealbum($id);
      return response($data,200,['Content-Type'=>'application/json']);
    }
}
