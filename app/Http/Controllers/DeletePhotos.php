<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Sosmed\PhotoServiceInterface;

class DeletePhotos extends Controller
{
    public function __invoke(PhotoServiceInterface $service, $id)
    {
      $result = $service->deletephoto($id);
      return response($result,200,['Content-Type'=>'application/json']);
    }
}
