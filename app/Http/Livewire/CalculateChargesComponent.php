<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Package;
use App\Models\Size;
use App\Models\Weight;
use App\Models\Commission;
use App\Models\Fixing;
use App\Models\Country;
class CalculateChargesComponent extends Component
{

    public $size;

    public $country_from;
    public $country_to;
    public $weight;

    public $price;

    public $package;
    public $qty;

    public function calculateInfo()
    {
          $this->validate([
                 'price' => 'required',
                 'weight' => 'required',
                 'size'=>'required',
                 'package'=>'required'
            ]);
      try{


            $d_size = Size::where('id', $this->size)->where('size_unit', 'cm')->first();
            if ($this->country_from) {
                $country = Country::find($this->country_from);
                $f_cost = $country->cost;
            } else {
                $f_cost = 0;
            }
            if ($this->country_to) {
                $t_country = Country::find($this->country_to);
                $t_cost = $t_country->cost;
            } else {
                $t_cost = 0;
            }

            $d_weight = Weight::where('id', $this->weight)->where('weight_unit', 'g')->first();

            $commission = Commission::where('status', 'active')->first();

            $result = ($d_size->size_cost + $d_weight->weight_cost + $f_cost + $t_cost + $this->price);


            $cmn = $commission->commission / 100 * $result;
            $fix = Fixing::where('status', 1)->first();
            $fixing = $fix->fixing / 100 * $result;
            //dd($result);

            session()->put('cal', [
                'shipping_cost' => $f_cost + $t_cost,
                'area' => $d_size->size_cost,
                'weight' => $d_weight->weight_cost,
                'price' => $this->price,
                'fixing' => $fixing,
                'result' => $result + $cmn,
                'p_size' => $this->size,
                'commission' => $cmn
            ]);
            return redirect()->route('daad.calculation');
      }catch ( \Exception $e)
      {
            return redirect()->route('daad.calculation')->with('message','some thing went wrong try again');
      }

    }
    public function render()
    {
        $countries = Country::all();
        $weights=Weight::all();
        $sizes=Size::all();

        $packages = Package::all();
        $commission = Commission::where('status', 'active')->first();
        return view('livewire.calculate-charges-component',['weights'=>$weights,'sizes'=>$sizes,'countries'=>$countries,'packages'=>$packages,'commission'=>$commission])->layout('layouts.guest');
    }
}
