<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\TodoServiceInterface;

class DeleteTodos extends Controller
{
  public function __invoke(TodoServiceInterface $service,$id)
  {
    $result = $service->DeleteTodos($id);
    return response($result,200,['COntent-type'=>'application/json']);
  }
}
