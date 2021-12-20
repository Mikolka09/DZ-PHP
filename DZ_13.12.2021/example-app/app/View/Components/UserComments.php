<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class UserComments extends Component
{
    public $user_comment;
    public int $user_id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
        $this->user_id = $user_id;
        $this->user_comment = DB::table('users')
            ->leftJoin('comments', 'users.id','=','comments.user_id')
            ->select('users.name','comments.comment','comments.created_at')
            ->where('users,id','=','user_id')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-comments',['comments'=>$this->user_comment]);
    }
}
