<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Commission;
use Livewire\WithPagination;

class AddCommissionComponent extends Component
{
    use WithPagination;
    public $commission;
    public $status;


    protected $rules = [
        'commission' => 'required',
        'status' => 'required',
    ];
    public function addCommission()
    {

        $this->validate();
        $commission = new Commission();
        $commission->status = $this->status;
        $commission->commission = $this->commission;
        $commission->save();
        session()->flash('msg', 'DropShipping New Commission has been added successfully!');
    }
    public function deleteCommission($id)
    {
        $commission = Commission::find($id);
        $commission->delete();
        session()->flash('del', 'DropShipping  Commission has been deleted successfully!');
    }
    public function updateCommission($id, $status)
    {
        $commission = Commission::find($id);
        $commission->status = $status;
        $commission->save();
        session()->flash('up', 'DropShipping  Commission has been updated successfully!');
    }
    public function render()
    {
        $commissions = Commission::orderBy('id', 'desc')->paginate(12);
        return view('livewire.admin.add-commission-component',['commissions'=>$commissions])->layout('layouts.base');
    }
}
