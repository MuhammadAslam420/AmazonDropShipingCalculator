<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Country;
use Livewire\WithPagination;

class AddCountryComponent extends Component
{
    use WithPagination;
    public $country;
    public $cost;


    protected $rules = [
        'country' => 'required',
        'cost' => 'required',
    ];
    public function addShipping()
    {
        $this->validate();
        $country = new Country();
        $country->country = $this->country;
        $country->cost = $this->cost;
        $country->save();
        session()->flash('msg', 'DropShipping New Country has been added succeessfully!');
    }
    public function deleteShipping($id)
    {
        $country = Country::find($id);
        $country->delete();
        session()->flash('del', 'DropShipping Country has been Deleted succeessfully!');
    }
    public function render()
    {
        $countries = Country::orderBy('id', 'desc')->paginate(12);
        return view('livewire.admin.add-country-component',['countries'=> $countries])->layout('layouts.base');
    }
}
