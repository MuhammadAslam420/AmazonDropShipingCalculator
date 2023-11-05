<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Package;
use Livewire\WithPagination;

class AddPackageComponent extends Component
{
    use WithPagination;
    public $package;
    public $commission;
    public $detail;


    protected $rules = [
        'package' => 'required',
        'commission' => 'required',
        'detail' => 'required',
    ];
    public function addPackage()
    {

        $this->validate();
        $package = new Package();
        $package->package = $this->package;
        $package->commission = $this->commission;
        $package->detail = $this->detail;
        $package->save();
        session()->flash('msg', 'Seller Package has been added successfully!');
    }
    public function deletePackage($id)
    {
        $package = Package::find($id);
        $package->delete();
        session()->flash('del', 'DropShipping  Package has been deleted successfully!');
    }
    public function render()
    {
        $packages = Package::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.add-package-component',['packages'=>$packages])->layout('layouts.base');
    }
}
