<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormularioColegio extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $colegio;
    public function __construct($colegio = null)
    {
        $this->colegio = $colegio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.formulario-colegio');
    }
}
