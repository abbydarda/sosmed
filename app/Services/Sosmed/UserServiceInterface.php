<?php
  namespace App\Services\Sosmed;

interface UserServiceInterface{
  public function showusers();
  public function showuserbyid($id);
  public function storeuser($data);
  public function deleteuser($id);
}
