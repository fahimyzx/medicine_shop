@extends('layout')
@section('content')
 <style>
 .uper {
 margin-top: 40px;
 }
 </style>
 <div class="card uper">
 <div class="card-header">
 Edit Share
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
 <form method="post" action="{{ route('medicine.update', $items->id) }}">
 @method('PATCH')
 @csrf
 <div class="form-group">
 <label for="name">Item Name:</label>
 <input type="text" class="form-control" name="item_name"
value="{{ $items->medicine_name }}" />
 </div>
 <div class="form-group">
 <label for="description">Item Description:</label>
 <input type="text" class="form-control"
name="item_description" value="{{ $items->medicine_desc }}" />
 </div>
 <div class="form-group">
 <label for="price">Item Price:</label>
 <input type="text" class="form-control" name="item_price"
value="{{ $items->medicine_price }}" />
 </div>
 <div class="form-group">
 @csrf
<label for="name">Manufacturer Name:</label>
 <input type="text" class="form-control" name="manufacturer_name" value="{{ $items->manufacturer_name }}"/>
 </div>
 <button type="submit" class="btn btn-primary">Update</button>
 </form>
 </div>
 </div>
@endsection