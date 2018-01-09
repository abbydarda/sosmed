<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\CommentServiceInterface;

class DeleteComments extends Controller
{
    public function __invoke(CommentServiceInterface $service, $id)
    {
      $data = $service->DeleteComments($id);
      return response($data,200,['Content-Type'=>'application/json']);
    }
}
