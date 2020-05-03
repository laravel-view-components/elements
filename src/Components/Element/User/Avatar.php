<?php

namespace LaravelViewComponents\Components\Element\User;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Avatar extends Component
{
    /**
     * The progress id attribute.
     *
     * @var User Model
     */
    public $user;
    /**
     * The progress name.
     *
     * @var string
     */
    public $name;
    /**
     * The alert type.
     *
     * @var string
     */
    public $type;

    /**
     * Create a new component instance.
     *
     * @param  string   $name
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::element.user.avatar');
    }
}
