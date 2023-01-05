@extends('base')

@include('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-2">
        <h1 class="text-white">Dashboard</h1>
        <div class="card col-sm-4 offset-sm-1 border border-dark mt-2">
            <div class="card-header">
                <h1 class="text-center">Shoes</h1>
            </div>
            <div class="card-body shadow">
            <img class="offset-sm-1" src="images/cover1.jpg" alt="cover">
            </div>
        </div>
    </div>

@endsection

<style>
    img {
        width: 85%;
    }
    <a href="{{ '/logout' }}" style="text-decoration: none; margin-right: 10px; color: black;"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                    </li>
                </div>
            </div>
</nav>

<style>
  a{
    margin-left: 20px;
  }

</style>
