<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class ProjectsShow extends ModalComponent
{
    public $project;

    public function render()
    {
        return view('livewire.projects-show');
    }
}
