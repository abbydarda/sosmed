<?php
namespace App\Services\Sosmed;

/**
 *
 */
interface TodoServiceInterface
{
  public function ShowTodos();

  public function ShowTodosbyId($id);

  public function ShowTodosbyUserId($userId);

  public function StoreTodos($data);

  public function UpdateTodos($id,$data);

  public function DeleteTodos($id);
}
