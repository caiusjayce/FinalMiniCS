<div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-1">
                <select class="form-control" value="form-select" wire:model.lazy="gender">
                        <option hidden="true">Gender</option>
                        <option selected disabled>Gender</option>
                        <option value="all">All</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                </select>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">
            </div>
            <div class="col">
                <a class="btn btn-dark text-white" href="/create-user">Add User</a>
            </div>

        </div>

    </div>
    <table class="table table-dark table-hover shadow border border-light mt-1">
        <thead class="bg-info">
            <tr>
                <th>ID No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td class="gender">{{ $user->gender }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ url('editUser', ['user' => $user->id]) }}" class="btn btn-outline-info" id="ic" title="Edit">Edit</a>
                        <a href="{{ url('deleteUser', ['user' => $user->id]) }}" class="btn btn-danger" id="ic" title="Delete">Delete</a>
                    </td>
                </tr>
            @endforeach
            @if($users->count() == 0)
                        <td colspan="5" class="text-center">
                            No users found in this table.
                        </td>
            @endif
        </tbody>
    </table>
    {{$users->links()}}
</div>

<style>
    .gender:first-letter {
        text-transform: uppercase;
    }
</style>