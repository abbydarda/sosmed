<?php
namespace App\Services;
use App\Services\Sosmed\AlbumServiceInterface;

class AlbumService implements AlbumServiceInterface
{

  public function showalbums($album)
  {
    return $album::all();
  }
}
