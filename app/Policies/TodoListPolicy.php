<?php

namespace App\Policies;

use App\Models\TodoList;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TodoListPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, TodoList $todoList): Response
    {
        return $user->id === $todoList->user_id ?
            Response::allow() :
            Response::deny('You do not own this todo item.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, TodoList $todoList): Response
    {
        return $user->id === $todoList->user_id ?
            Response::allow() :
            Response::deny('You do not own this todolist update.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, TodoList $todoList): Response
    {
        return $user->id === $todoList->user_id ?
            Response::allow() :
            Response::deny('You do not own this todolist delete.');
    }
}
