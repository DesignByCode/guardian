<?php


namespace DesignByCode\Guardian\Http\View\Components;

use Illuminate\View\Component;

/**
 * Class Layout
 * @package DesignByCode\Guardian\Http\View\Components
 */
class Layout extends Component
{
    /**
     * @var array|string[]
     */
    protected array $lookup = [
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

    /**
     * Get the view / view contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string
     */
    public function render()
    {
        return view($this->lookup[$this->type]);
    }
}
