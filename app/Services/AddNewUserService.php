<?php
namespace App\Services;

use Illuminate\Support\Facades\App;
use App\Actions\Fortify\CreateNewUser;

class AddNewUserService
{
    public function createNewUser(array $input)
    {
        $creater = App::make(CreateNewUser::class);
        return $creater->create($input);

    }

}
