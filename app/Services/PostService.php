<?php
namespace App\Services;

use App\Services\Sosmed\PostServiceInterface;
use App\Comment;
use App\Post;
/**
 *
 */
class PostService implements PostServiceInterface
{

  public function ShowPosts(){

    return Post::all();

  }

  public function ShowPostsbyId($id){

    return Post::find($id);

  }

  public function ShowPostsbyUserId($userId){

    return Post::where('userId',$userId)->get();

  }

  public function ShowPostsCommentsbyPostId($postId){

    return Comment::with('user')->where('postId',$postId)->get();

  }


  public function StorePosts($data){

    return Post::create($data);

  }

  public function UpdatePosts($id,$data){

      $result = Post::find($id);
      $result->update($data);
      return $result;

  }

  public function DeletePosts($id){

    $result = Post::find($id);
    $result->delete();
    return json_encode([],JSON_FORCE_OBJECT);
  }
}
