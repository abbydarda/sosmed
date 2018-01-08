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

    public function showuserbyid($id)
    {
    return User::find($id);
    }

    public function storeuser($data)
    {
      $password = bcrypt($data['password']);
      $data['password']=$password;
      return User::create($data);
    }

    public function deleteuser($id)
    {
      $data = User::find($id);
      // dd($data);
      $data = $data->delete();
      if ($data==true) {
        return true;
      }else {
        return false;
      }
    }
  }
