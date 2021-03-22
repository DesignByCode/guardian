<?php


namespace DesignByCode\Guardian\Http\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    protected $lookup = [
        'auth' => 'guardian::layouts.auth',
        'dashboard' => 'guardian::layouts.dashboard',
    ];
    public string $type;

    public string $title;

    /**
     * Layout constructor.
     * @param string $type
     * @param $title
     */
    public function __construct($type = 'auth', $title = '')
    {
        $this->type = $type;
        $this->title = $title;
    }

    public function render()
    {
        return view($this->lookup[$this->type]);
    }
}
