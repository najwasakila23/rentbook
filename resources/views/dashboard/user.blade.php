@extends('layouts.master')

@section('title', 'user')
@section('content')
<h1>User</h1>

<table class="table">
    <thead>

        <tr class="table-dark">
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        @foreach($data as $dt)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$dt->name}}</td>
            <td>{{$dt->email}}</td>
            <td>{{$dt->phone}}</td>
            <td>{{$dt->address}}</td>
            <td>
                <form action="{{route('indexEditUser', $dt->id)}}" class="d-inline">
                    <button type="submit" class="bi bi-pencil-square btn btn-primary"> edit</button>
                    @csrf
                </form>
                <form action="/delete/{{ $dt['id']}}" method="POST" class="d-inline" onsubmit="return confirm('sure delete this data?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bi bi-trash btn btn-secondary"> delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection