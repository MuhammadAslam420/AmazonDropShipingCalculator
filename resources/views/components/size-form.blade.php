<div class="card">
    <div class="card-header bg-success">
        <div class="card-title">
            <h2 class="text-lg text-orange-600 font-extrabold">Product Size Form</h2>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="addSize">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="size" class="label-control">Size</label>
                        <input type="text" name="size" id="size" placeholder="0.0" class="form-control" wire:model="size">
                        @error('size')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="size_size" class="label-control">Size Unit</label>
                        <input type="text" name="size_unit" id="size_unit" placeholder="like cm, in, m, km" class="form-control" wire:model="size_unit">
                        @error('size_unit')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="weight" class="label-control">Size Cost</label>
                        <input type="text" name="size_cost" id="size_cost" placeholder="0.0" class="form-control" wire:model="size_cost">
                        @error('size_cost')<span class="text-danger">{{$message}}</span>@enderror
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
