<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Livewire\Forms\TestForm;

class Dashboard extends Component
{
    public TestForm $form;

    public function render()
    {
        return view('livewire.admin.dashboard');
    }

    public function save() {
        $this->form->save();
    }
}
