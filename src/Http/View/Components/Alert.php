<?php


namespace DesignByCode\Guardian\Http\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;

    /**
     * Alert constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Get the view / view contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string
     */
    public function render()
    {
        return view('guardian::components.alert');
    }
}
