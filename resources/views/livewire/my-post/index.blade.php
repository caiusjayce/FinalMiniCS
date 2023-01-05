<div>
    <h1>My All Post</h1>
    <div class="row offset-2">
            <div class="cs">
                <select class="select" value="form-select" wire:model.lazy="category">
                    <option hidden="true">Category</option>
                    <option selected disabled>Category</option>
                    <option value="all">All Category</option>
                    <option value="Nike">Nike</option>
                    <option value="Adidas">Adidas</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Under Armour">Under Armour</option>
                    <option value="ANTA">ANTA</option>
                </select>
                <input class="search" type="text" placeholder="Search" wire:model.lazy="search">
            </div>
            
            @if (session('message'))
                    <div class="alert alert-success mt-5">{{ session('message') }}</div>
                @endif
    @foreach ($posts as $post)
        <div class="col-sm-4 mt-5">
            <div class="card rounded shadow-sm" id="card">
                <div class="card-header"><h4 class="mt-2 categ">{{$post->category}}</h4></div>
                <div class="card-body rounded {{($post->user->gender === 'male') ? 'male' : 'female'}}" id="card-body"><p style="font-size: 30px;">{{$post->remarks}} <br> 
                <h6 class="mt-5 underline" style="font-family: sans-serif">From: {{Auth::user()->name}}</h6></p></div>
                <div class="card-footer">
                <span class="time">posted at: {{ $post->created_at->format('g:i A') }}</span><br>
                <a class="btn btn-outline-dark" href="{{ url('editPost', ['myPost' => $post->id]) }}">Update</a>
                <a class="btn btn-danger" href="{{ url('deletePost', ['myPost' => $post->id]) }}">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
            @if($posts->count() == 0)
                <h1 class="mt-5 text-center text-danger">
                   EMPTY!
                </h1>
            @endif
    </div>
    {{$posts->links()}}
</div>


<style>
    .row {
        text-align: center;
    }
    #card {
        min-height: 350px;
    }
    .male {
        background-color: blue;
        color: white;
        transition: all .2s ease-in-out;
    }
    .male:hover {
        background-color: #034241;
        transform: scale(1.02);
    }
    .female {
        background-color: #034241;
        color: white;
        transition: all .2s ease-in-out;
    }
    .female:hover {
        background-color: #07b4b0;
        transform: scale(1.02);
    }
    .underline {
        border-bottom: 1px solid black;
        border-top: 1px solid black;
    }
    .categ:first-letter{
        text-transform: uppercase;
    }
    .select {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
    .search {
        background-color: #e4f0f0;
        color: black;
        height: 40px;
        border-radius: 10px;
    }
</style>