<div class='form-group'>
  <div class="row" >
    <div class="col-xs-12 col-md-3">
      {{Form::label('name', 'Name')}}
    </div>
    <div class="col-xs-12 col-md-9">
      {{Form::text( 'name', $category->name, ['class'=>'form-control'] )}}
    </div>
  </div>
</div>

<div class='form-group'>
  <div class="row" >
    <div class="col-xs-12 col-md-3">
      {{Form::label('description', 'Description')}}
    </div>
    <div class="col-xs-12 col-md-9">
      {{Form::text( 'description', $category->description, ['class'=>'form-control'] )}}
    </div>
  </div>
</div>


