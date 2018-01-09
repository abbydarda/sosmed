<?php
namespace App\Services;
use App\Services\Sosmed\TodoServiceInterface;
use App\Todo;

/**
 *
 */
class TodoService implements TodoServiceInterface
{
  public function ShowTodos(){
    return Todo::all();
  }

  public function ShowTodosbyId($id){
    return Todo::find($id);
  }

  public function ShowTodosbyUserId($userId){
    return Todo::where('userId',$userId)->get();
  }

  public function StoreTodos($data){
    return Todo::create($data);
  }

  public function UpdateTodos($id,$data){
    $result = Todo::find($id);
    $result->update($data);
    return $result;
  }

  public function DeleteTodos($id){
    $result = Todo::find($id);
    $result->delete();
  return json_encode([],JSON_FORCE_OBJECT);
  }
}
