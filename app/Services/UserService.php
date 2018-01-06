<?php
  namespace App\Services;

  use App\User;
  use App\Services\Sosmed\UserServiceInterface;

  class UserService implements UserServiceInterface
  {
    public function showusers()
    {
      return $datas = User::all();
    }
  }
