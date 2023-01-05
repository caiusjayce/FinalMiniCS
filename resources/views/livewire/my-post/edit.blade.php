<div>
    <h1>Edit Post</h1>
    <div class="card offset-4" id="post-edit">
        
    @if (session('message'))
        <div class="alert alert-success mt-2 text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header bg-dark">
            <h5 class="text-center text-white mt-2">Select Rate</h5>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true">Rate</option>
                <option selected disabled>Rating</option>
                <option value="Five">5</option>
                <option value="Four">4</option>
                <option value="Three">3</option>
                <option value="Two">2</option>
                <option value="One">1</option>
            </select>
                @error('category')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
        </div>
        <div class="card-body">
            <textarea name="remarks" id="" cols="55" rows="5" wire:model.defer="remarks"></textarea>
        </div>
        
            @error('remarks')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
        <button class="btn btn-info" wire:click="editPost()">Update</button>
        <button class="btn btn-dark" wire:click="back()">
            Cancel
        </button>
    </div>
</div>


<style>
    #post-edit {
        width: 470px;
    }
    #select-cat {
        width: 120px;
        height: 50px;
        margin-left: 37%;
    }
</style>