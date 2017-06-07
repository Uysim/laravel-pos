@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <h1>{{ $product->name }}</h1>
      <p>
        <strong>Quantity :</strong>
        {{ $product->qauntity }}
      </p>

      <p>
        <strong>Cost :</strong>
        {{ $product->cost }}
      </p>

      <p>
        <strong>Price :</strong>
        {{ $product->price }}
      </p>

      <p>
        <strong>Category :</strong>
        {{ $product->category->name }}
      </p>


      <a href="{!! route('products.index') !!}" class="btn btn-default">
        <i class="fa fa-caret-left"></i>
        Back
      </a>
      <a href="{!! route('products.edit', ['product'=>$product]) !!}" class="btn btn-primary">
        <i class="fa fa-pencil-square-o"></i>
        Edit
      </a>
      <a href="{!! route('products.destroy', ['product'=>$product]) !!}"
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
