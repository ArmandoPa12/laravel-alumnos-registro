<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CursosGestion extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $curso;
    public function __construct($curso = null)
    {
        $this->curso = $curso;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cursos-gestion');
    }
}
