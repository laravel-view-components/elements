<?php

namespace LaravelViewComponents\Components\Element\Timeline;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Wrapper extends Component
{
    /**
     * Whether or not the timeline is a simplified version.
     *
     * @var bool
     */
    public $simple;

    /**
     * Create a new component instance.
     *
     * @param  bool   $simple
     *
     * @return void
     */
    public function __construct($simple = false)
    {
        $this->simple = $simple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::element.timeline.wrapper');
    }
}
