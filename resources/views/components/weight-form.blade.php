<div class="card">
    <div class="card-header bg-success">
        <div class="card-title">
            <h2 class="text-lg text-orange-600 font-extrabold">product Weight Form</h2>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="addSize">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="size" class="label-control">Weight</label>
                        <input type="text" name="weight" id="weight" placeholder="0.0" class="form-control" wire:model="weight">
                        @error('weight')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="weight_unit" class="label-control">Weight Unit</label>
                        <input type="text" name="weight_unit" id="weight_unit" placeholder="like cm, in, m, km" class="form-control" wire:model="weight_unit">
                        @error('weight_unit')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="weight_cost" class="label-control">Weight Cost</label>
                        <input type="text" name="weight_cost" id="weight_cost" placeholder="0.0" class="form-control" wire:model="weight_cost">
                        @error('weight_cost')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn bg-success float-right mt-3">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
