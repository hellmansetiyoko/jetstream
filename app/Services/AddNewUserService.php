<?php
namespace App\Services;

use App\Actions\Fortify\CreateNewUser;
class AddNewUserService
{
    public function createNewUser(array $input)
    {
        $new_user = $createNewUserAction->create($input);
        return $new_user;
    }

}
