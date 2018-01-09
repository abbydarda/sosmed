<?php
namespace App\Services;
use App\Services\Sosmed\PhotoServiceInterface;
use App\Photo;

/**
 *
 */
class PhotoService implements PhotoServiceInterface
{

  public function showphotos()
  {
    return Photo::all();
  }

  public function showphotobyid($id)
  {
    return Photo::find($id);
  }

  public function showphotobyalbumid($albumId)
  {
    return Photo::find([$albumId]);
  }

  public function storephoto($data)
  {
    return Photo::create($data);
  }

  public function updatephoto($id,$data)
  {
    $result = Photo::find($id);
    $result->update($data);
    return $result;
  }

  public function deletephoto($id)
  {
    $result = Photo::find($id);
    $result->delete();
    return json_encode([],JSON_FORCE_OBJECT);
  }
}
