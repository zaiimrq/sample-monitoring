<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class AdminNavbar extends Component
{
    /**
     * Create a new component instance.
     */

    public Collection $timses;
    public function __construct()
    {
        $this->timses = Role::findByName('timses')->users;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-navbar');
    }
}
