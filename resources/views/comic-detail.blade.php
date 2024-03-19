@extends('layout.app')

@section('main-content')
<main>
    <div class='main-container w-25'>
            <h1>{{$comic['series']}}</h1>
            <div class="card">
              <img src="{{$comic['thumb']}}" alt="img">
              <div class="card-body">
                <h5 class="card-title">{{$comic['title']}}</h5>
              </div>
              <p>{{$comic['description']}}</p>
            </div>
    </div>
  </main>
@endsection
