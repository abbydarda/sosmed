<?php
namespace App\Transformers;

class TodoTransformer
{
  public function TransformCollection($datas)
  {
    return $datas->map(function($data){
      if ($data->completed==0) {
        $completed=False;
      }else {
        $completed=True;
      }

      return [
        'userId'=>$data->userId,
        'id'=>$data->id,
        'title'=>$data->title,
        'completed'=>$completed
      ];
    });
  }

  public function TransformItem($data)
  {
    if ($data->completed==0) {
      $completed=False;
    }else {
      $completed=True;
    }

      return [
        'userId'=>$data->userId,
        'id'=>$data->id,
        'title'=>$data->title,
        'completed'=>$completed
      ];
  }
}
