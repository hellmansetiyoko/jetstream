<?php

use Illuminate\Support\Facades\Hash;
use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\Facades\Route;
use App\Actions\Fortify\CreateNewUser;
use App\Contract\UserRepositoryContract;
use App\Services\DeleteUserService;

Route::prefix('users')->group(function(){
    Route::get('all',function (UserRepositoryContract $userRepository)
    {
        return view('users.user-all',[
            'users' => $userRepository->getAllUsers(),
        ]);
    });

    Route::get('{id}/id', function (UserRepositoryContract $userRepository, $id)
    {
        return $userRepository->getUserModel($id);
    });


});

Route::prefix('user')->group(function(){
    Route::get('/create', function(CreateNewUser $createNewUser)
    {
        $input = [
            'name'=>'rima',
            'email' => 'rima@mail.com',
            'password' => Hash::make('password123'),
        ];

        $input['password_confirmation'] = $input['password'];

        $new_user = $createNewUser->create($input);


    });

    Route::get('/{id}/delete', function(UserRepositoryContract $userRepository,DeleteUserService $deleter,  $id)
    {
        $user = $userRepository->getUserModel($id);

        if(null != $user)
        {
            $delete = $deleter->delete($user);
            return $delete;
        }
        if($user == null){
            return "user tidak ditemukan";
        }
    });
});
