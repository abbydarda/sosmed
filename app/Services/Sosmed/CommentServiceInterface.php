<?php
namespace App\Services\Sosmed;

interface CommentServiceInterface
{
  public function ShowComments();

  public function ShowCommentsbyId($id);

  public function ShowCommentsbyPostId($postId);

  public function StoreComments($data);

  public function UpdateComments($id,$data);

  public function DeleteComments($id);
}
