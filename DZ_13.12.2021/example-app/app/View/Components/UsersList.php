<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class UsersList extends Component
{
    public $users;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $users = new User();
        $this->users = $users->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.userslist', ['users' => $this->users]);
    }
}
