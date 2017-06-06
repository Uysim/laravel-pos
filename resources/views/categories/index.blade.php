@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <h1>Categires</h1>
        <a href="{!! route('categories.create') !!}" class="btn btn-success">New Category</a>
        <table class="table">
          <thead>
            <tr>
              <th>
                Name
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr>
                <td>
                  <a href="{!! route('categories.show', ['category'=>$category]) !!}">
                    {{ $category->name }}
                  </a>
                </td>
                <td class='text-right'>
                  <a href="{!! route('categories.edit', ['category'=>$category]) !!}" class='btn btn-default btn-xs'>
                    <i class="fa fa-pencil-square-o"></i>
                  </a>

                  <a href="{!! route('categories.destroy', ['category'=>$category]) !!}"
                    data-method="delete"
                    data-token="{{csrf_token()}}"
                    data-confirm="Are you sure?"
                    class='btn btn-danger btn-xs'>
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

    </div>
  </div>
@endsection


