<?php
namespace App\Transformers;

class AlbumTransformer
{
  public function TrasnsformCollection($datas)
  {
    return $datas->map(function($data){
      return [
        'userId'=>$data->userId,
        'id'=>$data->id,
        'title'=>$data->title
      ];
    });
  }

  public function TransformItem($data)
  {
      return [
        'userId'=>$data->userId,
        'id'=>$data->id,
        'title'=>$data->title
      ];
  }
}
