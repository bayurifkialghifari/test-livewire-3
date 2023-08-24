<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class TestForm extends Form
{
    #[Rule('required|min:5')]
    public $title = '';

    #[Rule('required|min:5')]
    public $content = '';

    public function save()
    {
        $this->validate();

        // dd($this->all());

        $this->reset();
    }
}
