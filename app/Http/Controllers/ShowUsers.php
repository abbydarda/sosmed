<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Sosmed\UserServiceInterface;
use App\Services\UserService;
use App\Transformers\UsersTransformer;

class ShowUsers extends Controller
{
    public function __invoke(UserServiceInterface $service, UsersTransformer $transformer)
    {
      $data = $service->showusers();
      $data =  $transformer->TrasformCollection($data);
      return response($data,200);
    }
}
