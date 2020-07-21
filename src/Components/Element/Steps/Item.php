<?php

namespace LaravelViewComponents\Components\Element\Steps;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Item extends Component
{
    /**
     * The step name.
     *
     * @var string
     */
    public $name;
    /**
     * The step title.
     *
     * @var string
     */
    public $title;
    /**
     * A tooltip for the step.
     *
     * @var string
     */
    public $tooltip;

    /**
     * Create a new component instance.
     *  Details here: https://preview-dev.tabler.io/docs/steps.html
     *
     * @param  string   $name
     * @param  string   $title
     * @param  string   $tooltip
     *
     * @return void
     */
    public function __construct($name, $title = null, $tooltip = null)
    {
        $this->name     = $name;
        $this->title    = $title;
        $this->tooltip  = $tooltip;
    }

    /**
     * Get the HTML Class for the avatar.
     *
     * @return string
     */
    public function getClassAttributes() {
      $class = 'step-item';

      return $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::element.steps.item');
    }
}
