<?php
namespace App\Repositories;

use App\Contract\UserRepositoryContract;
use App\Models\User;
class UserRepository implements UserRepositoryContract
{

    public function getAllUsers()
    {
        return User::all();
    }
    public function getUserModel(int $id)
    {
        return User::find($id);
    }
}
