@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <h1>{{ $category->name }}</h1>
      <p>{{ $category->description }}</p>
      <a href="{!! route('categories.index') !!}" class="btn btn-default">Back</a>
    </div>
  </div>

@endsection
