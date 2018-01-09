<?php
namespace App\Transformers;

/**
 *
 */
class PostTransformer
{

  public function TransformCollection($datas)
  {
    return $datas->map(function($data){
      return[
        'userId'=>$data->userId,
        'id'=>$data->id,
        'title'=>$data->title,
        'body'=>$data->body
      ];
    });
  }

  public function TransformItem($data)
  {
      return[
        'userId'=>$data->userId,
        'id'=>$data->id,
        'title'=>$data->title,
        'body'=>$data->body
      ];
  }
}
