<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\View\View;

class UserComposer
{

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('users', User::all());
        $view->with('counter', User::all()->count());
    }
}
