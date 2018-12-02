<?php

namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\UserRepository;

class UserViewComposer
{
    /**
     * 使用者儲存庫的實例。
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 建立一個新的個人檔案視圖組件。
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        // 所有依賴都會自動地被服務容器解析…
        $this->users = $users;
    }

    /**
     * 將資料綁定到視圖。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('user_id', $this->users->getUserId());
    }
}
