<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class Projects extends Component
{
    /**
     * Collection of projects
     *
     * @var \Illuminate\Database\Eloquent\Collection
     */
    public Collection $projects;

    /**
     * Create a new component instance.
     *
     * @param  int|null  $selected
     * @return void
     */
    public function __construct(public int|null $selected = null)
    {
        $this->projects = Project::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projects');
    }
}
