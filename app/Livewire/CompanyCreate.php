<?php

namespace App\Livewire;

use App\Livewire\Forms\CompanyForm;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Create Company')]
#[Layout('layouts.app')]
class CompanyCreate extends Component
{
    public CompanyForm $form;
    public $countries;
    public $cities = [];
    public $savedName = '';

    public function mount()
    {
        $this->countries = Country::all();
    }
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.company-create');
    }

    public function updated($property)
    {
        if ($property == 'form.country') {
            $cities = City::where('country_id', $this->form->country)->get();
            $this->cities = $cities;
            $this->form->city = $cities->first()?->id;
        }

    }

    public function save(): void
    {
        $this->validate();

        Company::create([
            'name'       => $this->form->name,
            'country_id' => $this->form->country,
            'city_id'    => $this->form->city,
        ]);

        $this->savedName = $this->form->name;

        $this->reset('form', 'cities');
    }
}
