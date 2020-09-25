@extends('layout')
@section('content')
<h1>create</h1>

<form method="Post" action="/createSubmit" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="name">Item Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" class="form-control" name="price">
  </div>
  <div class="form-group">
    <label for="quant">Quantity:</label>
    <input type="number" class="form-control" name="quant">
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" name="image">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

</form>

@endsection