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
      $data = $data->delete();
      return json_encode([],JSON_FORCE_OBJECT);
    }

    public function updateuser($id,$req)
    {
      $data = User::find($id);
      $update = $data->update($req);
      return $data;
    }
  }
