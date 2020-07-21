<?php

namespace LaravelViewComponents\Components\Element\Steps;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Support\Facades\View;

class Wrapper extends Component
{
    /**
     * The steps color.
     *
     * @var string
     */
    public $color;
    /**
     * If steps are simple counter.
     *
     * @var bool
     */
    public $counter;
    /**
     * The current step based on URL.
     *
     * @var string
     */
    public $currentStep;

    /**
     * Create a new component instance.
     *  Details here: https://preview-dev.tabler.io/docs/steps.html
     *
     * @param  string   $color    The color of the steps.
     * @param  bool     $counter    Whether or not step titles are a simple counter.
     *
     * @return void
     */
    public function __construct($color = null, $counter = false, $stepParameterName = 'step')
    {
        $this->color        = $color;
        $this->counter      = $counter;
        $this->currentStep  = request()->input($stepParameterName);
    }

    /**
     * Get the HTML Class for the avatar.
     *
     * @return string
     */
    public function getClassAttributes() {
      $class = 'steps';
      if($this->color) { $class .= ' steps-' . $this->color; }
      if($this->counter) { $class .= ' steps-counter' . $this->counter; }

      return $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $currentStep = $this->currentStep;

        View::composer('components::element.steps.item', function ($view) use ($currentStep)  {
          $view->with(compact('currentStep'));
        });

        return view('components::element.steps.wrapper');
    }
}
