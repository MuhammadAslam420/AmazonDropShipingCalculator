<?php

use App\Http\Livewire\Admin\AddCommissionComponent;
use App\Http\Livewire\Admin\AddCountryComponent;
use App\Http\Livewire\Admin\AddFixingComponent;
use App\Http\Livewire\Admin\AddPackageComponent;
use App\Http\Livewire\Admin\AddSizeComponent;
use App\Http\Livewire\Admin\AddWeightComponent;
use App\Http\Livewire\CalculateChargesComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});
route::get('/daad/dropshipping/calculation',CalculateChargesComponent::class)->name('daad.calculation');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/add/country',AddCountryComponent::class)->name('daad.country');
    Route::get('/add/package',AddPackageComponent::class)->name('daad.package');
    Route::get('/add/fixing',AddFixingComponent::class)->name('daad.fixing');
   Route::get('/add/commission',AddCommissionComponent::class)->name('daad.commission');
   Route::get('/add/size',AddSizeComponent::class)->name('daad.size');
   Route::get('/add/weight',AddWeightComponent::class)->name('daad.weight');
});
