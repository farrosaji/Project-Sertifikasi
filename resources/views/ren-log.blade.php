<?php

namespace App\View\Components;
use Illuminate\View\Component;

class RentLogTable extends Component
{
    public $rentlogs;

    public function __construct($rentlogs)
    {
        $this->rentlogs = $rentlogs;
    }

    public function render()
    {
        return view('components.rent-log-table');
    }
}

