<?php
namespace App\Services\Sosmed;

interface PhotoServiceInterface
{
  public function showphotos();

  public function showphotobyid($id);

  public function showphotobyalbumid($albumId);

  public function storephoto($data);

  public function updatephoto($id,$data);

  public function deletephoto($id);
}
