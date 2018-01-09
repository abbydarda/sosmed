<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\UserServiceInterface;
use App\Transformers\UsersTransformer;

class ShowUsersbyId extends Controller
{
    public function __invoke(UserServiceInterface $service,UsersTransformer $transformer, $id)
    {
      $data = $service->showuserbyid($id);
      $data =  $transformer->TransformItem($data);
      return response($data,200);
    }
}
