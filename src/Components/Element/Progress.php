<?php

namespace LaravelViewComponents\Components\Element;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Progress extends Component
{
    /**
     * The progress color.
     *
     * @var string
     */
    public $color;
    /**
     * The progress size.
     *
     * @var string
     */
    public $size;
    /**
     * The progress value.
     *
     * @var int
     */
    public $progress;
    /**
     * Whether or not the progress is indeterminate.
     *
     * @var bool
     */
    public $indeterminate;

    /**
     * Create a new component instance.
     *
     * @param  string   $color
     * @param  string   $size
     * @param  int      $progress
     * @param  bool     $indeterminate
     *
     * @return void
     */
    public function __construct($color = "green", $size = '', $progress = 0, $indeterminate = false)
    {
        $this->color          = $color;
        $this->size           = $size;
        $this->progress       = $progress;
        $this->indeterminate  = $indeterminate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::element.progress');
    }
}
