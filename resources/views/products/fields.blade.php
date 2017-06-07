<div class='form-group'>
  <div class="row" >
    <div class="col-xs-12 col-md-3">
      {{Form::label('name', 'Name')}}
    </div>
    <div class="col-xs-12 col-md-9">
      {{Form::text( 'name', $product->name, ['class'=>'form-control'] )}}
    </div>
  </div>
</div>

<div class='form-group'>
  <div class="row" >
    <div class="col-xs-12 col-md-3">
      {{Form::label('qauntity', 'Quantity')}}
    </div>
    <div class="col-xs-12 col-md-9">
      {{Form::number('qauntity', $product->qauntity, ['class'=>'form-control'] )}}
    </div>
  </div>
</div>

<div class='form-group'>
  <div class="row" >
    <div class="col-xs-12 col-md-3">
      {{Form::label('cost', 'Cost')}}
    </div>
    <div class="col-xs-12 col-md-9">
      {{Form::number('cost', $product->cost, ['class'=>'form-control', 'step'=>'any'] )}}
    </div>
  </div>
</div>

<div class='form-group'>
  <div class="row" >
    <div class="col-xs-12 col-md-3">
      {{Form::label('price', 'Price')}}
    </div>
    <div class="col-xs-12 col-md-9">
      {{Form::number('price', $product->price, ['class'=>'form-control', 'step'=>'any'] )}}
    </div>
  </div>
</div>

<div class='form-group'>
  <div class="row" >
    <div class="col-xs-12 col-md-3">
      {{Form::label('category_id', 'Category')}}
    </div>
    <div class="col-xs-12 col-md-9">
      {{Form::select('category_id', $category_select_collection, $product->category_id, ['class'=>'form-control', 'placeholder'=>'Select Category'] )}}
    </div>
  </div>
</div>

