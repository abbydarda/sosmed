<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\UserServiceInterface;
use App\Transformers\UsersTransformer;

class UpdateUser extends Controller
{
  public function __invoke(UserServiceInterface $service, UsersTransformer $transformer, Request $request, $id)
  {
    $data = $service->updateuser($id,$request->all());
    $data = $transformer->TransformItem($data);
    return response($data,200);
  }
}
