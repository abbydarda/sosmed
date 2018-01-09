<?php
namespace App\Transformers;

class PhotoTransformer
{

  public function TransformCollection($datas)
  {
    return $datas->map(function($data){
      return [
        'albumId'=>$data->albumId,
        'id'=>$data->id,
        'title'=>$data->title,
        'url'=>$data->url,
        'thumbnailUrl'=>$data->thumnailUrl
      ];
    });
  }

  public function TransformItem($data)
  {
      return [
        'albumId'=>$data->albumId,
        'id'=>$data->id,
        'title'=>$data->title,
        'url'=>$data->url,
        'thumbnailUrl'=>$data->thumbnailUrl
      ];
  }
}
