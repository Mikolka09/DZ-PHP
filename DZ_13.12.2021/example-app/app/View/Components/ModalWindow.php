<?php

namespace App\View\Components;

use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ModalWindow extends Component
{

    public int $id;
    public string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->name = DB::table('users')
            ->select('name')
            ->where('users.id', '=', 'id')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-window',['name'=>$this->name, 'user_id'=>$this->id]);
    }
}
