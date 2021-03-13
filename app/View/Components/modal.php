<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $theme;
    public $judul;
    public $btn;
    public function __construct($theme, $judul, $btn)
    {
        $this->theme = $theme;
        $this->judul = $judul;
        $this->btn = $btn;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
