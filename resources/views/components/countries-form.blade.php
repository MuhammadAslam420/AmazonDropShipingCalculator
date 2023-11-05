<div class="card">
    <div class="card-header bg-success">
        <div class="card-title">
            <h2 class="text-lg text-orange-600 font-extrabold">Add New DropShipping Country</h2>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="addShipping">

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="label-control">Add Country</label>
                        <input type="text" name="country" id="country" placeholder="like China, Uae" class="form-control" wire:model="country">
                        @error('country')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="label-control">Country Shipping Cost</label>
                        <input type="text" name="cost" id="cost" placeholder="0.0" class="form-control" wire:model="cost">
                        @error('commission')<span class="text-danger">{{$message}}</span>@enderror
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
