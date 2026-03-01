<?php

namespace App\Livewire\Public\Homepage;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Homepage extends Component
{
    #[Layout('layouts.public')]
    public function render()
    {
        return view('livewire.public.homepage.homepage');
    }
}
