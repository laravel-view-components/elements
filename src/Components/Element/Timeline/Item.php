<?php

namespace LaravelViewComponents\Components\Element\Timeline;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Item extends Component
{
    /**
     * The timeline item icon color.
     *
     * @var string
     */
    public $color;
    /**
     * The timeline item title.
     *
     * @var string
     */
    public $title;
    /**
     * The timeline item time.
     *
     * @var string
     */
    public $time;

    /**
     * Create a new component instance.
     *
     * @param  bool   $simple
     *
     * @return void
     */
    public function __construct($color = null, $title = 'Timeline Item', $time = null)
    {
        $this->color = $color;
        $this->title = $title;
        $this->time = $time ?? now()->subHour()->diffForHumans();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::element.timeline.item');
    }
}
