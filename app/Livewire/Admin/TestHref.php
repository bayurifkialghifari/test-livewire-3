<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\On;

class TestHref extends Component
{
    public function render()
    {
        return view('livewire.admin.test-href');
    }

    public function confirmDelete() {
        $this->dispatch('confrim', action: 'test-delete', id: 1);
    }

    #[On('test-delete')]
    public function delete() {
        dd('GGWP');
    }
}
