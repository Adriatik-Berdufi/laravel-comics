@extends('layout.app')

@section('main-content')
<main>
    <div class='main-container'>
      <div class="row">
        @foreach($titles as $index => $title)
          <div class="col-2 p-3">
            <div class="card">
              <a href="{{route('comicDetail',['index' => $index])}}">
                <img src="{{$title['thumb']}}" alt="img">
              </a>
              <div class="card-body">
                <h5 class="card-title">{{$title['title']}}</h5>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection
