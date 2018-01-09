<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\UserServiceInterface;

class DeleteUser extends Controller
{
    public function __invoke(UserServiceInterface $service, $id)
    {
      $data = $service->deleteuser($id);
      return response($data,200,['Content-type'=>'application/json']);
    }
}
