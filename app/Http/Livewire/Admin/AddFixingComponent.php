<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Fixing;
use Livewire\WithPagination;

class AddFixingComponent extends Component
{
    use WithPagination;
    public $fixing;
    public $status;
    protected $rules = [
        'fixing' => 'required',
        'status' => 'required'
    ];
    public function addFixing()
    {
        $this->validate();
        $fix = new Fixing();
        $fix->fixing = $this->fixing;
        $fix->status = $this->status;
        $fix->save();
        session()->flash('msg', 'fixing added Successfully!');
    }
    public function deletefixing($id)
    {
        $fix = Fixing::find($id);
        $fix->delete();
        session()->flash('del', 'fixing deleted Successfully!');
    }
    public function updateStatus($id, $status)
    {
        $fix = Fixing::find($id);
        $fix->status = $status;
        $fix->save();
        session()->flash('up', 'fixing status Updated Successfully!');
    }
    public function render()
    {
        $fixings = Fixing::paginate(12);
        return view('livewire.admin.add-fixing-component',['fixings'=>$fixings])->layout('layouts.base');
    }
}
