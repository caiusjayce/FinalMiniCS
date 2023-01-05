<div>

    <div class="card shadow border border-light">
        <div class="card-header bg-danger">
            <h5 class="text-white text-center mt-2">Remove Shoes?</h5>
        </div>
        <div class="card-body">
            <div class="col-md-4 offset-md-4">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid mb-3 rounded-circle mt-2 img-responsive center-block d-block mx-auto" style="width: 100px;">
            </div>
            <table class="table">
                <tr>
                    <th >
                        Brand
                    </th>
                    <td>
                        {{ $this->shoe->shoe_name }}
                    </td>
                </tr>
                <tr>
                    <th >
                       Model/Version
                    </th>
                    <td>
                        {{ $this->shoe->shoe_brand }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Size
                    </th>
                    <td>
                        {{ $this->shoe->price }}
                    </td>
                </tr>
                <tr>
                    <th >
                        Color
                    </th>
                    <td>
                        {{ $this->shoe->color }}
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-danger" wire:click="delete()">
                    Delete
                </button>
                <button class="btn btn-outline-dark mx-2" wire:click="back()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

</div>

