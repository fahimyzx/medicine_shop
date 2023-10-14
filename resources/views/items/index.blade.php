@extends('layout')
@section('content')
 <style>
 .uper {
 margin-top: 40px;
 }
 .create-medicine{
    text-decoration: none;
    color: white;
 }

 </style>
    <div class="d-flex justify-content-between align-items-center mt-2">
        <h1 class="display-5 mt-2 mb-2">Medicine Shop</h1>
        <button type="button" class="btn btn-success">
        <a href="http://localhost:8000/medicine/create" class="create-medicine">
                Create 
        </a>    
        </button>
    </div>

 <div class="uper">
 @if(session()->get('success'))
 <div class="alert alert-success">
 {{ session()->get('success') }}
 </div><br />
 @endif
 <table class="table table-striped">
 <thead>
 <tr>
 <td>ID</td>
 <td>Medicine Name</td>
 <td>Medicine Description</td>
 <td>Medicine Price</td>
 <td>Manufacturer Name</td>
 <td colspan="2">Action</td>
 </tr>
 </thead>
 <tbody>
 @foreach($items as $item)
 <tr>
 <td>{{$item->id}}</td>
 <td>{{$item->medicine_name}}</td>
 <td>{{$item->medicine_desc}}</td>
 <td>{{$item->medicine_price}}</td>
 <td>{{$item->manufacturer_name}}</td>
 <td><a href="{{ route('medicine.edit',$item->id)}}" class="btn
btn-primary">Edit</a></td>
 <td>
 <form action="{{ route('medicine.destroy', $item->id)}}"
method="post">
 @csrf
@method('DELETE')
<button class="btn btn-danger"
type="submit">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 <div>
@endsection