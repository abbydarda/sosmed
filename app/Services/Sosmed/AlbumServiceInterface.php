<?php
namespace App\Services\Sosmed;

interface AlbumServiceInterface
{
  public function showalbums();
  public function showalbumbyid($id);
  public function showalbumbyuserid($userId);
  public function storealbum($data);
  public function updatealbum($id,$data);
  public function deletealbum($id);
}
