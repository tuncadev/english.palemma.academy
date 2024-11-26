<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $headers;
    public $rows;

    public function __construct(array $headers, $rows)
    {
        $this->headers = $headers;
        $this->rows = $rows;
    }

    public function render()
    {
        return view('components.table');
    }
}
