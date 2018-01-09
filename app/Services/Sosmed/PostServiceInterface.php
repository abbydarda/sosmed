<?php
namespace App\Services\Sosmed;

/**
 *
 */
interface PostServiceInterface
{
  public function ShowPosts();

  public function ShowPostsbyId($id);

  public function ShowPostsbyUserId($userId);

  public function ShowPostsCommentsbyPostId($postId);

  public function StorePosts($data);

  public function UpdatePosts($id,$data);

  public function DeletePosts($id);

}
