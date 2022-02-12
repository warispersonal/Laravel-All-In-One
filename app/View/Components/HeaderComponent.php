<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderComponent extends Component
{
    public $componentTitle;
    public $secondVariable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($componentTitle, $secondVariable)
    {
        $this->componentTitle = $componentTitle;
        $this->secondVariable = $secondVariable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-component')->with('secondVariable',$this->secondVariable);
    }
}
