<?php

namespace App\Http\Controllers;

use App\Data\UserData;

class UsersController extends Controller
{
    /**
     * Instantiate a new UsersController instance.
     */
    public function __construct()
    {
        $this->userData = new UserData(
            name:  'Wanda Maximoff',
            email: 'wanda.maximoff@marvel.com',
            age:   32,
        );
    }

    public function show() 
    {
        $user = $this->userData->all();
        echo '使用者名稱：' . $user['name']	. '，電子郵件：' . $user['email'] . '，年紀：' . $user['age'] . PHP_EOL;
    }
}
