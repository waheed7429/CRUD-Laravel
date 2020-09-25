@extends('layout')
@section('content')
<h1>edit</h1>

<form method="Post" action="/edit" enctype="multipart/form-data">
@csrf
<div class="form-group">
    
    <input type="hidden" class="form-control" name="id" value="{{$data['id']}}">
  </div>
  <div class="form-group">
    <label for="name">Item Name:</label>
    <input type="text" class="form-control" name="name" value="{{$data['name']}}">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" name="price" value="{{$data['price']}}">
  </div>
  <div class="form-group">
    <label for="quant">Quantity:</label>
    <input type="number" class="form-control" name="quant" value="{{$data['quantity']}}">
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" name="image" value="{{ $data['img'] }}">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


@endsection