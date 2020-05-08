<?php

namespace LaravelViewComponents\Components\Element\User;

use Illuminate\View\Component;
use Illuminate\Support\Collection;

class AvatarList extends Component
{
    /**
     * The users for this avatar list.
     *
     * @var Collection Model
     */
    public $users;
    /**
     * Whether or not the avatar list is stacked.
     *
     * @var bool
     */
    public $stacked;

    /**
     * Create a new component instance.
     *  Details here: https://preview-dev.tabler.io/docs/avatars.html
     *
     * @param  Collection   $users     The users for this avatar list.
     * @param  bool         $stacked   Whether or not the avatar list is stacked.
     *
     * @return void
     */
    public function __construct($users = null, $stacked = false)
    {
        $this->users   = $users;
        $this->stacked = $stacked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components::element.user.avatar.list');
    }
}
