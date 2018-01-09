<?php
namespace App\Services;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Album;

class AlbumService implements AlbumServiceInterface
{

  public function showalbums()
  {
    $data = Album::all();
    return $data;
  }

  public function showalbumbyid($id)
  {
    return Album::find($id);
  }

  public function showalbumbyuserid($userId)
  {
    return Album::find([$userId]);
  }

  public function storealbum($data)
  {
    return Album::create($data);
  }

  public function updatealbum($id,$req)
  {
    $data = Album::find($id);
    $data->update($req);
    return $data;
  }

  public function deletealbum($id)
  {
    $data = Album::find($id);
    $data->delete();
    return json_encode([],JSON_FORCE_OBJECT);
  }
}
