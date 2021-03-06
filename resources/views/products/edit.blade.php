@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <h1 class="text-center">Edit Product</h1>
      <br>
      @include('shared/errors')
      {{ Form::model($product, ['route' => ['products.update', $product]]) }}

      @include('products.fields')

      <div class="form-group text-right">
        <a href="{{ route('products.index') }}" class="btn btn-default">Back</a>
        {{ Form::submit('Update Product', ['class'=>'btn btn-primary']) }}
      </div>


      {{ Form::close() }}
    </div>
  </div>
@endsection
