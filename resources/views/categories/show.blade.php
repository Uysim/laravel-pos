@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <h1>{{ $category->name }}</h1>
      <p>{{ $category->description }}</p>
      <a
        href="{!! route('categories.index') !!}"
        class="btn btn-default">
        <i class="fa fa-caret-left"></i>
        Back
      </a>
      <a
        href="{!! route('categories.edit', ['category'=>$category]) !!}"
        class="btn btn-primary">
        <i class="fa fa-pencil-square-o"></i>
        Edit
      </a>
      <a href="{!! route('categories.destroy', ['category'=>$category]) !!}"
          data-method="delete"
          data-token="{{csrf_token()}}"
          data-confirm="Are you sure?"
          class='btn btn-danger'>
        <i class="fa fa-trash"></i>
        Destroy
      </a>

    </div>
  </div>

@endsection
