<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <select value="form-select" wire:model.lazy="color">
                    <option value="all">All</option>
                    <option hidden="true">Select Brand</option>
                        <option selected disabled>Select Brand</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Under Armour">Under Armour</option>
                        <option value="ANTA">ANTA</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
            </div>

        </div>

    </div>
    <table class="table table-dark table-hover shadow border border-dark">
        <thead class="bg-light">
            <tr>
                <th>List</th>
                <th>Brand</th>
                <th>Model/Version</th>
                <th>Sizes</th>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shoes as $shoe)
                <tr>
                    <td>{{ $shoe->id }}</td>
                    <td>{{ $shoe->shoe_name }}</td>
                    <td>{{ $shoe->shoe_brand }}</td>
                    <td>{{ $shoe->price }}</td>
                    <td>{{ $shoe->color }}</td>
                    <td>
                        <a href="{{ url('edit', ['shoe' => $shoe->id]) }}" class="btn btn-outline-info text-white mx-0" id="ic" title="Edit">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['shoe' => $shoe->id]) }}" class="btn btn-danger mx-0" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
            @if($shoes->count() == 0)
                        <td colspan="7" class="text-center">
                            -No Available Shoes-
                        </td>
                    @endif
        </tbody>
    </table>
    {{$shoes->links()}}
</div>