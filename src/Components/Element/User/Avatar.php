<?php

namespace LaravelViewComponents\Components\Element\User;

use LaravelViewComponents\Contracts\UserHasAvatarContract;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Avatar extends Component
{
    /**
     * The user this Avatar relates to.
     *
     * @var User Model
     */
    public $user;
    /**
     * The Avatar image.
     *
     * @var string
     */
    public $image;
    /**
     * The Avatar size.
     *
     * @var string
     */
    public $size;
    /**
     * The Avatar color.
     *
     * @var string
     */
    public $color;
    /**
     * The Avatar shape.
     *
     * @var string
     */
    public $shape;

    /**
     * Create a new component instance.
     *  Details here: https://preview-dev.tabler.io/docs/avatars.html
     *
     * @param  string   $user     The User::class if this avatar has one.
     * @param  string   $image    The avatar image.
     * @param  string   $size     The size of the avatar.
     * @param  string   $color    The color of the avatar badge.
     * @param  string   $shape    The design shape of the avatar.
     *
     * @return void
     */
    public function __construct($user = null, $image = null, $size = null, $color = null, $shape = "rounded-circle")
    {
        $this->user   = $user;
        $this->image  = $image;
        $this->color  = $color;
        $this->size   = $size;
        $this->shape  = $shape;
    }

    /**
     * Get the HTML Class for the avatar.
     *
     * @return string
     */
    public function getClassAttributes() {
      $class = 'avatar';
      if($this->size) { $class .= ' avatar-' . $this->size; }
      if($this->color) { $class .= ' bg-' . $this->color; }
      if($this->shape) { $class .= ' ' . $this->shape; }

      return $class;
    }

    /**
     * Get the HTML Class for the avatar.
     *
     * @return bool
     */
    public function hasCapableUser() {
      return ($this->user && $this->user instanceof UserHasAvatarContract);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->hasCapableUser() ?
          view('components::element.user.avatar.dynamic') :
          view('components::element.user.avatar.simple');
    }
}
