@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <h1 class="text-center">New Categories</h1>
      <br>
      @include('shared/errors')
      {{ Form::model($category, ['route' => 'categories.store']) }}

      @include('categories.fields')
      <div class="form-group text-right">
        <a href="{{ route('categories.index') }}" class="btn btn-default">Back</a>
        {{ Form::submit('Create Category', ['class'=>'btn btn-primary']) }}
      </div>


      {{ Form::close() }}
    </div>
  </div>
@endsection
