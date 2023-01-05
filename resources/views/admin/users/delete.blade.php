@extends('base')

@extends('navbar')

@section('title', 'Delete')

@section('content')
<div class="container m-5">
        <div class="col-sm-5 offset-sm-5">
            <div>
                <livewire:admin.users.delete :userId="$id"/>
            </div>
        </div>
    </div>
</div>
@endsection
