@extends('layouts.master')

@section('title', 'edit')
@section('content')
       
<form action="{{route('updateIndex' , $data->id)}}" method="post" onsubmit="return confirm('sure to edit this data?')">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" value="{{$data->name}}" name="name" class="form-control" id="name" placeholder="Enter Your Name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email </label>
        <input type="email" value="{{$data->email}}" name="email" class="form-control" id="email" placeholder="Enter Your Email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone</label>
        <input type="number" value="{{$data->phone}}" name="phone" class="form-control" id="phone" placeholder="Enter Your Phone">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="adress" value="{{$data->address}}" name="address" class="form-control" id="address" placeholder="Enter Your address">
        <!-- <textarea class="form-control" value="{{$data->address}}" name="address" id="address" rows="3" placeholder="Enter Your Address"></textarea> -->
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection