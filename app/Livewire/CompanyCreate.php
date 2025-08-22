<?php

namespace App\Livewire;

use App\Models\Country;
use Livewire\Component;

class CompanyCreate extends Component
{
    public $countries;
    public $country;
    public $cities = [];

    public function mount()
    {
        $this->countries = Country::all();
    }
    public function render()
    {
        return view('livewire.company-create');
    }
}
