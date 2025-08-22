<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CompanyForm extends Form
{
    // remove validation in real time when you using .live
    #[Validate('required|min:3', onUpdate: false)]
    public string $name = '';

    #[Validate('required')]
    public string $country = '';

    #[Validate('required')]
    public string $city = '';
}
