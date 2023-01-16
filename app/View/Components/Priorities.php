<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Enums\Priorities as PrioritiesEnum;

class Priorities extends Component
{
    /**
     * Array of priorities
     *
     * @var array
     */
    public array $priorities;

    /**
     * Create a new component instance.
     *
     * @param  int|null  $selected
     * @return void
     */
    public function __construct(public PrioritiesEnum|null $selected = null)
    {
        $this->priorities = PrioritiesEnum::cases();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.priorities');
    }
}
