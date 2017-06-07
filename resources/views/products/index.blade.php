@extends('layouts.app')
@section('content')
  <h1>Products</h1>
  <a href="{!! route('products.create') !!}" class="btn btn-success">New Product</a>
  <table class="table">
    <thead>
      <tr>
        <th>
          Name
        </th>
        <th>
          Quantity
        </th>
        <th>
          Cost
        </th>
        <th>
          Price
        </th>
        <th>
          Category
        </th>
        <th>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>
            <a href="{!! route('products.show', ['product'=>$product]) !!}">
              {{ $product->name }}
            </a>
          </td>

          <td>
            {{ $product->qauntity }}
          </td>

          <td>
            {{ $product->cost }}
          </td>

          <td>
            {{ $product->price }}
          </td>

          <td>
            {{ $product->category->name }}
          </td>

          <td class='text-right'>
            <a href="{!! route('products.edit', ['product'=>$product]) !!}" class='btn btn-default btn-xs'>
              <i class="fa fa-pencil-square-o"></i>
            </a>

            <a href="{!! route('products.destroy', ['product'=>$product]) !!}"
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

@endsection


