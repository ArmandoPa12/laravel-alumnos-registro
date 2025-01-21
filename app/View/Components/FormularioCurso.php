<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormularioCurso extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $curso;
    public $gestion;
    public function __construct($curso = null, $gestion =null)
    {
        $this->curso = $curso;
        $this->gestion = $gestion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulario-curso');
    }
}
