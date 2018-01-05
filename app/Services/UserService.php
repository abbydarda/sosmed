<?php
  namespace App\Services;

  use App\User;
  use App\Services\Sosmed\UserServiceInterface;

  class UserService implements UserServiceInterface
  {
    public function showusers()
    {
      $datas = User::all();

      $result =  $datas->map(function ($data){
        if ($data->address == null) {
          return [
            "id"=>$data->id,
            "name"=>$data->name,
            "email"=>$data->email,
            "address"=>[
              'street'=>'',
              'suite'=>'',
              'city'=>'',
              'zipcode'=>'',
              'geo'=>[
                'lat'=>'',
                'lang'=>''
              ]
            ],
          ];
        }else {
          return [
            "id"=>$data->id,
            "name"=>$data->name,
            "email"=>$data->email,
            "address"=>[
              'street'=>$data->address['street'],
              'suite'=>$data->address['suite'],
              'city'=>$data->address['city'],
              'zipcode'=>$data->address['city'],
              'geo'=>[
                'lat'=>$data->address['geo']['lat'],
                'lang'=>$data->address['geo']['lang']
              ]
            ],
          ];
        }
      });
      return $result;
    }
  }
