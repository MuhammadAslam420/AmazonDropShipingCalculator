<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Weight;
use Livewire\WithPagination;

class AddWeightComponent extends Component
{
    use WithPagination;
    public $weight;
    public $weight_unit;
    public $weight_cost;


    protected $rules = [
        'weight' => 'required',
        'weight_unit' => 'required',
        'weight_cost' => 'required',
    ];
    public function addSize()
    {

        $this->validate();
        $weight = new Weight();
        $weight->weight = $this->weight;
        $weight->weight_unit = $this->weight_unit;
        $weight->weight_cost = $this->weight_cost;
        $weight->save();
        session()->flash('msg', 'Material Packaging New weight has been added successfully!');
    }
    public function deleteWeight($id)
    {
        $weight = Weight::find($id);
        $weight->delete();
        session()->flash('del', 'DropShipping  Weight has been deleted successfully!');
    }
    public function render()
    {
        $weights = Weight::orderBy('id', 'desc')->paginate(12);
        return view('livewire.admin.add-weight-component',['weights'=> $weights])->layout('layouts.base');
    }
}
