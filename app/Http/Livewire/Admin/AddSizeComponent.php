<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Size;
use Livewire\WithPagination;

class AddSizeComponent extends Component
{
    use WithPagination;
    public $size;
    public $size_unit;
    public $size_cost;


    protected $rules = [
        'size' => 'required',
        'size_unit' => 'required',
        'size_cost' => 'required',
    ];
    public function addSize()
    {

        $this->validate();
        $size = new Size();
        $size->size = $this->size;
        $size->size_unit = $this->size_unit;
        $size->size_cost = $this->size_cost;
        $size->save();
        session()->flash('msg', 'Material Packaging New size has been added succeessfully!');
    }
    public function deleteSize($id)
    {
        $size = Size::find($id);
        $size->delete();
        session()->flash('del', 'DropShipping  size has been deleted succeessfully!');
    }
    public function render()
    {
        $sizes = Size::orderBy('id', 'desc')->paginate(12);
        return view('livewire.admin.add-size-component',['sizes'=>$sizes])->layout('layouts.base');
    }
}
