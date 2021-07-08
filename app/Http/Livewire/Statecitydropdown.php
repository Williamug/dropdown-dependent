<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class Statecitydropdown extends Component
{
    public $states;
    public $cities;
    public $selectedState = null;

    public function mount()
    {
        $this->states = State::all();
        $this->cities = collect();
    }

    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }
    public function render()
    {
        return view('livewire.statecitydropdown');
    }
}
