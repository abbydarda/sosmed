<?php
namespace App\Transformers;

/**
 *
 */
class CommentTransformer
{

  public function TransformCollection($datas)
  {
    return $datas->map(function($data){
      return[
        'postId'=>$data->postId,
        'id'=>$data->id,
        'name'=>$data->user['name'],
        'email'=>$data->user['email'],
        'body'=>$data->body
      ];
    });
  }

  public function TransformItem($data)
  {
    return[
      'postId'=>$data->postId,
      'id'=>$data->id,
      'name'=>$data->user['name'],
      'email'=>$data->user['email'],
      'body'=>$data->body
    ];
  }
}
