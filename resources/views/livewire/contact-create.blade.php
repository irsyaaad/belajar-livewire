<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <div class="form-group row">
                <div class="col">
                    <input wire:model="name"
                    type="text"
                    name="name" id=""
                    class="form-control @error('name') is-invalid @enderror"
                    placeholder="Name">

                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="phone"
                    type="text"
                    name="phone"
                    id=""
                    class="form-control @error('phone') is-invalid @enderror"
                    placeholder="+628xxx">

                    @error('phone')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
