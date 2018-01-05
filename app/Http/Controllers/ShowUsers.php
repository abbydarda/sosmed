<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Sosmed\UserServiceInterface;
use App\Services\UserService;

class ShowUsers extends Controller
{
    public function __invoke(UserServiceInterface $service)
    {
      $data = $service->showusers();
      return $data;
    }
}
