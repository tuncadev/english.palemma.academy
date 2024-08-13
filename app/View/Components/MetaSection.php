<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetaSection extends Component
{
    public $title;

    public function __construct($title = 'Palemma Academy')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.meta-section');
    }
}
