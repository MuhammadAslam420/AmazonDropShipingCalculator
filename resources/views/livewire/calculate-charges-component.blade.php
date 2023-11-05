 <main class="main-content  mt-5 bg-warning">
     <section class="mt-5">
         <div class="page-header bg-warning">
             <div class="row bg-warning">
                 <div class="col-md-4 bg-warning">
                     <div class="row">
                         <div class="card bg-warning">
                             <div class="card-header bg-warning">
                                 <div class="card-title">
                                     <h5>Daad Revenue & DropShipping Calculations</h5>
                                 </div>
                                 <div class="card-body bg-warning">
                                     <form wire:submit.prevent="calculateInfo">

                                         <div class="row">
                                             <div class="col-md-6">
                                                 <label for="country">Shipping Country(From):</label>
                                                 <div class="input-group mb-3">

                                                     <select class="form-control" id="inputGroupSelect01" name="country_from" wire:model="country_from">
                                                         <option selected>Choose...</option>
                                                         @foreach($countries as $country)
                                                         <option value="{{$country->id}}">{{$country->country}}</option>
                                                         @endforeach
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="country">Shipping Country(To):</label>
                                                 <div class="input-group mb-3">
                                                     <select class="form-control" id="inputGroupSelect01" name="country_to" wire:model="country_to">
                                                         <option selected>Choose...</option>
                                                         @foreach($countries as $country)
                                                         <option value="{{$country->id}}">{{$country->country}}</option>
                                                         @endforeach
                                                     </select>
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="form-group">
                                                     <label for="size" class="label-control">Select Size:</label>
                                                     <select name="size" id="size" class="form-control" wire:model="size">
                                                         <option value="" selected>Choose Size</option>
                                                         @foreach($sizes as $size)
                                                         <option value="{{$size->id}}">{{$size->size}} &nbsp;cm</option>
                                                         @endforeach
                                                     </select>
                                                     @error('size') <span class="text-danger">{{$message}}</span>@enderror
                                                 </div>
                                             </div>

                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label for="">Material weight</label>
                                                     <select name="weight" id="weight" class="form-control" wire:model="weight">
                                                         <option value="" selected>Choose Weight</option>
                                                         @foreach($weights as $weight)
                                                         <option value="{{$weight->id}}">{{$weight->weight}} &nbsp; g</option>
                                                         @endforeach
                                                     </select>
                                                     @error('weight') <span class="text-danger">{{$message}}</span>@enderror
                                                 </div>
                                             </div>


                                             <div class="col-md-6">
                                                 <label for="price" class="label-control">Product Price:</label>
                                                 <div class="input-group mb-3">

                                                     <span class="input-group-text" id="basic-addon1">$</span>
                                                     <input type="text" name="price" class="form-control" placeholder="0.0" aria-label="Username" aria-describedby="basic-addon1" wire:model="price">
                                                     @error('price') <span class="text-danger">{{$message}}</span>@enderror
                                                 </div>
                                             </div>
                                             <div class="col-md-12">
                                                 <div class="form-group d-flex">
                                                     <label for="package">Package:</label><br>

                                                     @foreach($packages as $package)
                                                     <div class="m-1 p-2">
                                                         <input type="radio" name="package" value="{{$package->package}}" wire:model="package">{{$package->package}}<br>
                                                     </div>
                                                     @endforeach
                                                     @error('package') <span class="text-danger">{{$message}}</span>@enderror
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-12 ">
                                             <button type="submit" class="btn bg-primary mt-5 text-white ">Calculate</button>

                                         </div>
                                     </form>


                                 </div>

                             </div>

                         </div>




                     </div>
                 </div>
                 @if(Session::has('message'))
                 <div class="col-md-8 bg-warning">
                     <div class="alert alert-danger">{{Session::get('message')}}</div>

                 </div>
                 @endif
                 @if(Session::has('cal'))
                 <div class="col-md-8 bg-warning">
                     <div class="row bg-warning">
                         <div class="card bg-warning">
                             <div class="card-header bg-warning">
                                 <div class="card-title">
                                     <h5>Daad Revenue Calculation & Profit</h5>
                                 </div>
                             </div>
                             <div class="card-body bg-warning">
                                 <div class="row">
                                     <div class="table-responsive">
                                         <table class="table table-striped">
                                             <thead class="bg-dark">
                                                 <tr>
                                                     <th class="text-light">Size Price ($)</th>
                                                     <th class="text-light">Weight Price($)</th>
                                                     <th class="text-light">Shipping Cost($)</th>
                                                     <th class="text-light">Daad Commission ($)</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <tr>
                                                     <td class="text-center">
                                                         <p style="font-weight:900;font-size:22px;">{{Session::get('cal')['area']}} <b>$</b></p>
                                                     </td>
                                                     <td class="text-center">
                                                         <p style="font-weight:900;font-size:22px;">{{Session::get('cal')['weight']}} <b>$</b></p>
                                                     </td>
                                                     <td class="text-center">
                                                         <p style="font-weight:900;font-size:22px;">{{Session::get('cal')['shipping_cost']}} <b>$</b></p>
                                                     </td>
                                                     <td class="text-center">
                                                         <p style="font-weight:900;font-size:22px;">{{Session::get('cal')['commission']}} <b>$</b></p>
                                                     </td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                                 <table class="table">
                                     <tr>
                                         <td><span style="font-size:20px;font-weight:700;">Product Price</span></td>
                                         <td>{{Session::get('cal')['price']}} <b>$</b></td>
                                         <td><span style="font-size:20px;font-weight:700;">SubTotal</span></td>
                                         <td>{{Session::get('cal')['result']}} <b>$</b></td>
                                     </tr>
                                     <tr>
                                         <td><span style="font-size:20px;font-weight:700;">Fixing/Adjustment</span> </td>
                                         <td><b> -</b>{{Session::get('cal')['fixing']}} <b>$</b></td>
                                         <td><span style="font-size:20px;font-weight:700;">Total Product Cost</span></td>
                                         <td>{{Session::get('cal')['result'] - Session::get('cal')['fixing']}} <b>$</b></td>
                                     </tr>
                                     <tr>
                                         <td style="font-size:15px;font-weight:800;">Profit With Our Plans</td>
                                         <td>
                                             @foreach($packages as $package)
                                             <p style="font-size:12px;font-weight:900;color:darkmagenta;">{{$package->package}}:&nbsp;<span>{{$package->commission/100 * Session::get('cal')['result']}} <b>$</b></span></p>
                                             @endforeach
                                         </td>
                                         <td style="font-size:15px;font-weight:800;">Monthly Minimum Estimate <br>
                                             Profit on <input type="number" name="qty" wire:model="qty"><br> quantities sales</td>
                                         <td>
                                             @if($qty)
                                             @foreach($packages as $package)
                                             <p style="font-size:12px;font-weight:900;color:darkmagenta;">{{$package->package}}:&nbsp;<span>{{$package->commission/100 * Session::get('cal')['result'] * $qty}} <b>$</b></span></p>
                                             @endforeach
                                             @endif
                                         </td>
                                     </tr>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
                 @endif
             </div>
         </div>
     </section>
 </main>
