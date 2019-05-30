@extends('master')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <form action="translate" method="get">
          @csrf
          <textarea
            style="height: 90px;"
            class="form-control mt-5"
            placeholder="Some text here"
            name="sentence"
          ></textarea>
          <button type="submit" class="btn btn-primary mt-3 mb-3">Translate</button>
        </form>
        {!! \Session('translationResult') !!}
      </div>
      <div class="col-lg-6">
        <form action="translate" method="post">
          @csrf
          <input type="text" class="form-control mt-5 mb-3" placeholder="en" name="en" />
          <input type="text" class="form-control" placeholder="ru" name="ru" />
          <button type="submit" class="btn btn-primary mt-3 mb-3">Add to dictionary</button>
        </form>
        {{ \Session('addingResult') }}
      </div>
    </div>
  </div>
@endsection