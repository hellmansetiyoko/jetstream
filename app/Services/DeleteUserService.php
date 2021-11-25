<?php
namespace App\Services;

use Illuminate\Support\Facades\App;
use Laravel\Jetstream\Contracts\DeletesUsers;



class DeleteUserService
{
    public function delete($user)
    {
        $deleteUsers= App::make(DeletesUsers::class);
        $deleteUsers->delete($user);
    }

}
