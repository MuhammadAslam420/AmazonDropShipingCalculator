<div class="card">
    <div class="card-header bg-success">
        <div class="card-title">
            <h2 class="text-lg text-orange-600 font-extrabold">Add New Fixing Form</h2>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit="addFixing">

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="label-control">Add Fixing Commission</label>
                        <input type="text" name="fixing" id="fixing" placeholder="0.0" class="form-control" wire:model="fixing">
                        @error('fixing')<span class="text-danger">{{$message}}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="label-control">Status</label>
                        <select class="form-control" name="status" wire:model="status">
                            <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>

                        </select>
                        @error('status')<span class="text-danger">{{$message}}</span>@enderror
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
