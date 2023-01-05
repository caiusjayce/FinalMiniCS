<div>
        <div class="card border border-light">
            <div class="card-header" style="background-color: rgba(65, 56, 52, 1)">
                <h3 class="text-left text-white mt">Change Shoes</h3>
            </div>
            <div class="card-body shadow">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="shoe_name">
                    <label for="shoe_name">Brand</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="shoe_brand">
                    <label for="shoe_brand">Model/Version</label>
                    @error('shoe_brand')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                  <select type="text" class="form-select" wire:model.defer="price">
                        <option hidden="true">Select Size</option>
                        <option selected disabled>Select Size</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                    </select>
                    <label for="price">Size</label>
                    @error('price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="color" class="form-select" wire:model.defer="color">
                        <option hidden="true">Select Color</option>
                        <option selected disabled>Select Color</option>
                        <option value="Black">Black</option>
                        <option value="White">White</option>
                        <option value="Artic Ice">Artic Ice</option>
                        <option value="Red Black">Red Black</option>
                        <option value="Gold Black">Gold Black</option>
                        <option value="White Blue">White Blue</option>
                    </select>
                    <label for="color">Origin</label>
                    @error('color')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-dark" wire:click="editShoe()">
                        Save Changes
                    </button>
                    <button class="btn btn-outline-dark mx-1" wire:click="back()">
                        Back
                    </button>
                </div>
            </div>
        </div>
</div>
