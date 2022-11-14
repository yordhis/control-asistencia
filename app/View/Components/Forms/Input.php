<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{

    public $title;
    public $type;
    public $name;
    public $id;
    public $commentHelp;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type, $name, $id, $commentHelp = null, $value = null)
    {
        $this->title = $title;
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->commentHelp = $commentHelp;
        $this->value = $value;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
