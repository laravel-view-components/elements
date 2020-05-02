<?php

namespace LaravelViewComponents\Components\Element\User;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Avatar extends Component
{
    /**
     * The progress id attribute.
     *
     * @var string
     */
    public $id;
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
     * @param  string   $type
     *
     * @return void
     */
    public function __construct($name = "toast", $type = "success")
    {
        $this->id = 'input-' . Str::kebab(class_basename(get_class($this))) . '-' . md5($name);
        $this->name = $name;
        $this->type = $type;
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
