<?php
namespace App\Contract;

interface UserRepositoryContract{
    public function getAllUsers();
    public function getUserModel(int $id);
}
