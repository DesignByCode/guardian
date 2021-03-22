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

    public function render()
    {
        return view ('guardian::components.alert');
    }
}
