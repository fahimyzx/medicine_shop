@extends('layout')
@section('content')
 <style>
 .uper {
 margin-top: 40px;
 }
 </style>
 <div class="card uper">
 <div class="card-header">
 Add Medicine
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div><br />
 @endif
 <form method="post" action="{{ route('medicine.store') }}">
 <div class="form-group">
 @csrf
<label for="name">Medicine Name:</label>
 <input type="text" class="form-control" name="item_name"/>
 </div>
 <div class="form-group">
 <label for="price">Medicine Description:</label>
 <input type="text" class="form-control"
name="item_description"/>
 </div>
 <div class="form-group">
 <label for="quantity">Medicine Price:</label>
 <input type="text" class="form-control" name="item_price"/>
 </div>
 <div class="form-group">
 @csrf
<label for="name">Manufacturer Name:</label>
 <input type="text" class="form-control" name="manufacturer_name"/>
 </div>
 <button type="submit" class="btn btn-primary">Add</button>
 </form>
 </div>
 </div>
@endsection