<?php

namespace App\Livewire\Admin\Template;

use Livewire\Attributes\Layout;
use Livewire\Component;

class TemplateList extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.template.template-list');
    }
}
