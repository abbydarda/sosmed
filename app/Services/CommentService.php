<?php
namespace App\Services;
use App\Comment;
use App\Services\Sosmed\CommentServiceInterface;

/**
 *
 */
class CommentService implements CommentServiceInterface
{

  public function ShowComments(){
    return Comment::with('user')->get();
  }

  public function ShowCommentsbyId($id){
    // return Comment::with('user')->where('id',$id)->get();
    $result = Comment::find($id);
    $result->load('user');
    return $result;

  }

  public function ShowCommentsbyPostId($postId){
    return Comment::with('user')->where('postId',$postId)->get();

  }

  public function StoreComments($data){
    return Comment::create($data);
  }

  public function UpdateComments($id,$data){
    $result = Comment::find($id);
    $result->update($data);
    return $result;
  }

  public function DeleteComments($id){
    $result = Comment::find($id);
    $result->delete();
    return json_encode([],JSON_FORCE_OBJECT);
  }
}
