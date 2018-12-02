<?php

namespace App;

use App\User;
use Auth;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 取得當下登入的使用者id
     *
     * @return mixed
     */
    public function getUserId() {
        return Auth::id();
    }
}
