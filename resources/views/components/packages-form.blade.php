<div class="card">
    <div class="card-header bg-success">
        <div class="card-title">
            <h2 class="text-lg text-orange-600 font-extrabold">Add New Package</h2>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="addPackage">

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="label-control">Add Package</label>
                        <input type="text" name="package" id="package" placeholder="Like Silver, gold , platinum or Diamond" class="form-control" wire:model="package">
                        @error('package')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="label-control">Package Commission Charge</label>
                        <input type="text" name="commission" id="commission" placeholder="0.0" class="form-control" wire:model="commission">
                        @error('commission')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="label-control">Detail</label>
                        <textarea name="detail" rows="8" cols="80" class="form-control" wire:model="detail"></textarea>
                        @error('detail')<span class="text-danger">{{$message}}</span>@enderror

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
