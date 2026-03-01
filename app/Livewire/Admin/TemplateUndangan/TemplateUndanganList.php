<?php

namespace App\Livewire\Admin\TemplateUndangan;

use App\Models\TemplateUndangan;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class TemplateUndanganList extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.template-undangan.template-undangan-list', [
            'dataTemplateUndangan' => TemplateUndangan::latest()->paginate(5),
        ]);
    }
}
